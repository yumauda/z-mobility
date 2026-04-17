<?php
if (!function_exists('zm_single_column_clean_text')) {
  function zm_single_column_clean_text($text)
  {
    $text = html_entity_decode(wp_strip_all_tags((string) $text), ENT_QUOTES, 'UTF-8');
    $text = preg_replace("/\r\n|\r/u", "\n", $text);
    $text = preg_replace("/[ \t]+/u", ' ', $text);
    $text = preg_replace("/\n{3,}/u", "\n\n", $text);
    return trim((string) $text);
  }
}

if (!function_exists('zm_single_column_parse_content')) {
  function zm_single_column_parse_content($content)
  {
    $parsed = [
      'profile_items' => [],
      'sections' => [],
      'faq_items' => [],
      'index_titles' => [],
      'faq_heading' => 'よくある質問（FAQ）',
    ];

    if (trim((string) $content) === '') {
      return $parsed;
    }

    $encoded_content = mb_encode_numericentity((string) $content, [0x80, 0x10FFFF, 0, ~0], 'UTF-8');
    $dom = new DOMDocument('1.0', 'UTF-8');
    $previous = libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?><div id="zm-single-root">' . $encoded_content . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();
    libxml_use_internal_errors($previous);

    $root = $dom->getElementById('zm-single-root');
    if (!$root) {
      return $parsed;
    }

    $mode = '';
    $current_section = null;
    $current_question = '';
    $current_answer = '';

    foreach ($root->childNodes as $node) {
      if ($node->nodeType !== XML_ELEMENT_NODE) {
        continue;
      }

      $tag_name = strtolower($node->nodeName);
      $node_text = zm_single_column_clean_text($node->textContent);

      if ($tag_name === 'h2') {
        if (!empty($current_section)) {
          $parsed['sections'][] = $current_section;
          $current_section = null;
        }

        if ($current_question !== '') {
          $parsed['faq_items'][] = [
            'question' => $current_question,
            'answer' => $current_answer,
          ];
          $current_question = '';
          $current_answer = '';
        }

        if ($node_text === 'プロフィール') {
          $mode = 'profile';
          continue;
        }

        if ($node_text === '目次') {
          $mode = 'index';
          continue;
        }

        if (preg_match('/FAQ|よくある質問|その他/u', $node_text)) {
          $mode = 'faq';
          $parsed['faq_heading'] = $node_text;
          continue;
        }

        $mode = 'section';
        $current_section = [
          'title' => $node_text,
          'index_title' => $node_text,
          'content_blocks' => [],
          'paragraphs' => [],
          'quote' => '',
        ];
        continue;
      }

      if ($mode === 'profile' && $tag_name === 'dl') {
        $label = '';
        foreach ($node->childNodes as $profile_node) {
          if ($profile_node->nodeType !== XML_ELEMENT_NODE) {
            continue;
          }

          $profile_tag = strtolower($profile_node->nodeName);
          if ($profile_tag === 'dt') {
            $label = zm_single_column_clean_text($profile_node->textContent);
          } elseif ($profile_tag === 'dd' && $label !== '') {
            $parsed['profile_items'][] = [
              'label' => $label,
              'value' => zm_single_column_clean_text($profile_node->textContent),
            ];
            $label = '';
          }
        }
        continue;
      }

      if ($mode === 'index' && ($tag_name === 'ol' || $tag_name === 'ul')) {
        foreach ($node->childNodes as $index_node) {
          if ($index_node->nodeType !== XML_ELEMENT_NODE || strtolower($index_node->nodeName) !== 'li') {
            continue;
          }
          $title = zm_single_column_clean_text($index_node->textContent);
          if ($title !== '') {
            $parsed['index_titles'][] = $title;
          }
        }
        continue;
      }

      if ($mode === 'section' && !empty($current_section)) {
        if ($tag_name === 'p') {
          if ($node_text !== '') {
            $current_section['paragraphs'][] = $node_text;
            $current_section['content_blocks'][] = [
              'type' => 'text',
              'text' => $node_text,
            ];
          }
          continue;
        }

        if ($tag_name === 'blockquote') {
          $current_section['quote'] = $node_text;
          if ($node_text !== '') {
            $current_section['content_blocks'][] = [
              'type' => 'quote',
              'text' => $node_text,
            ];
          }
          continue;
        }
      }

      if ($mode === 'faq') {
        if ($tag_name === 'h3') {
          if ($current_question !== '') {
            $parsed['faq_items'][] = [
              'question' => $current_question,
              'answer' => $current_answer,
            ];
          }
          $current_question = preg_replace('/^Q[\.\s]*/u', '', $node_text);
          $current_answer = '';
          continue;
        }

        if ($tag_name === 'p' && $current_question !== '') {
          $answer_text = preg_replace('/^A[\.\s]*/u', '', $node_text);
          $current_answer = $current_answer === '' ? $answer_text : $current_answer . "\n" . $answer_text;
        }
      }
    }

    if (!empty($current_section)) {
      $parsed['sections'][] = $current_section;
    }

    if ($current_question !== '') {
      $parsed['faq_items'][] = [
        'question' => $current_question,
        'answer' => $current_answer,
      ];
    }

    return $parsed;
  }
}

if (!function_exists('zm_single_column_get_term_name')) {
  function zm_single_column_get_term_name($post_id)
  {
    $taxonomies = get_object_taxonomies(get_post_type($post_id), 'names');

    foreach ($taxonomies as $taxonomy) {
      if ($taxonomy === 'post_format') {
        continue;
      }

      $terms = get_the_terms($post_id, $taxonomy);
      if (!is_wp_error($terms) && !empty($terms)) {
        return $terms[0]->name;
      }
    }

    return '';
  }
}

if (!function_exists('zm_single_column_get_acf_content')) {
  function zm_single_column_get_acf_content($post_id)
  {
    $data = [
      'profile_items' => [],
      'sections' => [],
      'faq_items' => [],
      'faq_heading' => 'その他（FAQ）',
      'category' => '',
    ];

    if (!function_exists('get_field')) {
      return $data;
    }

    $data['category'] = zm_single_column_clean_text((string) get_field('column_display_category', $post_id));
    $data['faq_heading'] = zm_single_column_clean_text((string) get_field('column_faq_heading', $post_id));
    if ($data['faq_heading'] === '') {
      $data['faq_heading'] = 'その他（FAQ）';
    }

    $profile_rows = get_field('column_profile', $post_id);
    if (is_array($profile_rows)) {
      foreach ($profile_rows as $row) {
        $label = zm_single_column_clean_text($row['label'] ?? '');
        $value = zm_single_column_clean_text($row['value'] ?? '');
        if ($label === '' || $value === '') {
          continue;
        }
        $data['profile_items'][] = [
          'label' => $label,
          'value' => $value,
        ];
      }
    }

    $section_rows = get_field('column_sections', $post_id);
    if (is_array($section_rows)) {
      foreach ($section_rows as $row) {
        $title = zm_single_column_clean_text($row['title'] ?? '');
        if ($title === '') {
          continue;
        }

        $section = [
          'title' => $title,
          'index_title' => zm_single_column_clean_text($row['index_title'] ?? '') ?: $title,
          'content_blocks' => [],
        ];

        $content_block_rows = $row['content_blocks'] ?? [];
        if (is_array($content_block_rows)) {
          foreach ($content_block_rows as $content_block_row) {
            $layout = $content_block_row['acf_fc_layout'] ?? '';
            if ($layout === 'text') {
              $text = zm_single_column_clean_text($content_block_row['text'] ?? '');
              if ($text !== '') {
                $section['content_blocks'][] = [
                  'type' => 'text',
                  'text' => $text,
                ];
              }
              continue;
            }

            if ($layout === 'image') {
              $image = $content_block_row['image'] ?? null;
              if (is_array($image) && !empty($image['url'])) {
                $section['content_blocks'][] = [
                  'type' => 'image',
                  'url' => (string) $image['url'],
                  'alt' => zm_single_column_clean_text($image['alt'] ?? ''),
                  'width' => (int) ($image['width'] ?? 0),
                  'height' => (int) ($image['height'] ?? 0),
                ];
              }
              continue;
            }

            if ($layout === 'quote_box') {
              $text = zm_single_column_clean_text($content_block_row['text'] ?? '');
              if ($text !== '') {
                $section['content_blocks'][] = [
                  'type' => 'quote',
                  'text' => $text,
                ];
              }
            }
          }
        }

        $data['sections'][] = $section;
      }
    }

    $faq_rows = get_field('column_faq_items', $post_id);
    if (is_array($faq_rows)) {
      foreach ($faq_rows as $row) {
        $question = zm_single_column_clean_text($row['question'] ?? '');
        $answer = zm_single_column_clean_text($row['answer'] ?? '');
        if ($question === '' || $answer === '') {
          continue;
        }
        $data['faq_items'][] = [
          'question' => $question,
          'answer' => $answer,
        ];
      }
    }

    return $data;
  }
}

get_header();
?>
<main>
  <?php
  $column_archive_url = get_post_type_archive_link('column') ?: home_url('/column/');
  $column_base_uri = esc_url(get_template_directory_uri() . '/images/column');
  ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php
      $post_id = get_the_ID();
      $lead = get_the_excerpt();

      $acf_content = zm_single_column_get_acf_content($post_id);
      $parsed_content = zm_single_column_parse_content(get_post_field('post_content', $post_id));

      $profile_items = $acf_content['profile_items'];
      $sections = !empty($acf_content['sections']) ? $acf_content['sections'] : $parsed_content['sections'];
      $faq_items = !empty($acf_content['faq_items']) ? $acf_content['faq_items'] : $parsed_content['faq_items'];
      $faq_heading = !empty($acf_content['faq_items']) ? $acf_content['faq_heading'] : $parsed_content['faq_heading'];
      $category = $acf_content['category'] !== '' ? $acf_content['category'] : zm_single_column_get_term_name($post_id);

      foreach ($sections as $i => $section) {
        $sections[$i]['id'] = sprintf('section-%02d', $i + 1);
      }

      $faq_id = sprintf('section-%02d', count($sections) + 1);
      $index_items = [];

      if (!empty($sections)) {
        foreach ($sections as $i => $section) {
          $index_items[] = [
            'id' => $section['id'],
            'number' => sprintf('%02d', $i + 1),
            'title' => $section['index_title'] ?? $section['title'],
          ];
        }
      } elseif (!empty($parsed_content['index_titles'])) {
        foreach ($parsed_content['index_titles'] as $i => $index_title) {
          $index_items[] = [
            'id' => sprintf('section-%02d', $i + 1),
            'number' => sprintf('%02d', $i + 1),
            'title' => $index_title,
          ];
        }
      }

      if (!empty($faq_items)) {
        $index_items[] = [
          'id' => $faq_id,
          'number' => sprintf('%02d', count($index_items) + 1),
          'title' => $faq_heading,
        ];
      }

      $index_columns = [];
      if (!empty($index_items)) {
        $index_columns = array_chunk($index_items, (int) ceil(count($index_items) / 2));
      }

      $thumbnail_id = get_post_thumbnail_id($post_id);
      $thumbnail_data = $thumbnail_id ? wp_get_attachment_image_src($thumbnail_id, 'full') : false;
      $hero_image_url = $thumbnail_data ? $thumbnail_data[0] : $column_base_uri . '/column-1.png';
      $hero_image_width = $thumbnail_data ? $thumbnail_data[1] : 1000;
      $hero_image_height = $thumbnail_data ? $thumbnail_data[2] : 563;
      $hero_image_alt = $thumbnail_id ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true) : '';
      if ($hero_image_alt === '') {
        $hero_image_alt = get_the_title();
      }
      ?>

      <section class="p-single-column">
        <div class="l-inner">
          <nav class="p-single-column__pan" aria-label="パンくずリスト">
            <a class="p-single-column__panLink" href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
            <span class="p-single-column__panDivider" aria-hidden="true"></span>
            <a class="p-single-column__panLink" href="<?php echo esc_url($column_archive_url); ?>">コラム</a>
            <span class="p-single-column__panDivider" aria-hidden="true"></span>
            <span class="p-single-column__panCurrent"><?php the_title(); ?></span>
          </nav>

          <div class="p-single-column__inner">
            <article class="p-single-column__article">
              <header class="p-single-column__header">
                <div class="p-single-column__meta">
                  <time class="p-single-column__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>
                  <?php if ($category !== '') : ?>
                    <span class="p-single-column__category"><?php echo esc_html($category); ?></span>
                  <?php endif; ?>
                </div>

                <h1 class="p-single-column__title"><?php echo nl2br(esc_html(get_the_title())); ?></h1>
                <?php if ($lead !== '') : ?>
                  <p class="p-single-column__lead"><?php echo esc_html($lead); ?></p>
                <?php endif; ?>
              </header>

              <figure class="p-single-column__hero">
                <img
                  decoding="async"
                  loading="lazy"
                  src="<?php echo esc_url($hero_image_url); ?>"
                  alt="<?php echo esc_attr($hero_image_alt); ?>"
                  width="<?php echo esc_attr((string) $hero_image_width); ?>"
                  height="<?php echo esc_attr((string) $hero_image_height); ?>">
              </figure>

              <?php if (!empty($profile_items) || !empty($index_items)) : ?>
                <div class="p-single-column__info">
                  <?php if (!empty($profile_items)) : ?>
                    <section class="p-single-column__card">
                      <div class="p-single-column__cardHead">
                        <p class="p-single-column__cardEn">Profile</p>
                        <h2 class="p-single-column__cardJa">プロフィール</h2>
                      </div>

                      <div class="p-single-column__profile">
                        <?php foreach ($profile_items as $profile_item) : ?>
                          <div class="p-single-column__profileRow">
                            <p class="p-single-column__profileLabel"><?php echo esc_html($profile_item['label']); ?></p>
                            <p class="p-single-column__profileValue"><?php echo nl2br(esc_html($profile_item['value'])); ?></p>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </section>
                  <?php endif; ?>

                  <?php if (!empty($index_items)) : ?>
                    <section class="p-single-column__card">
                      <div class="p-single-column__cardHead">
                        <p class="p-single-column__cardEn">Index</p>
                        <h2 class="p-single-column__cardJa">目次</h2>
                      </div>

                      <div class="p-single-column__index">
                        <?php foreach ($index_columns as $index_column) : ?>
                          <div class="p-single-column__indexColumn">
                            <?php foreach ($index_column as $index_item) : ?>
                              <a class="p-single-column__indexItem" href="#<?php echo esc_attr($index_item['id']); ?>">
                                <span class="p-single-column__indexNumber"><?php echo esc_html($index_item['number']); ?></span>
                                <span class="p-single-column__indexText"><?php echo esc_html($index_item['title']); ?></span>
                                <span class="p-single-column__indexArrow" aria-hidden="true">
                                  <img decoding="async" loading="lazy" src="<?php echo esc_url($column_base_uri . '/column-arrow.svg'); ?>" alt="" width="20" height="20">
                                </span>
                              </a>
                            <?php endforeach; ?>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </section>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

              <?php if (!empty($sections) || !empty($faq_items)) : ?>
                <div class="p-single-column__sections">
                  <?php foreach ($sections as $section) : ?>
                    <section class="p-single-column__section" id="<?php echo esc_attr($section['id']); ?>">
                      <div class="p-single-column__sectionHead">
                        <h2 class="p-single-column__sectionTitle"><?php echo esc_html($section['title']); ?></h2>
                        <span class="p-single-column__sectionLine" aria-hidden="true"></span>
                      </div>

                      <div class="p-single-column__sectionBody">
                        <?php foreach (($section['content_blocks'] ?? []) as $content_block) : ?>
                          <?php if (($content_block['type'] ?? '') === 'quote') : ?>
                            <div class="p-single-column__quote">
                              <span class="p-single-column__quoteIcon" aria-hidden="true">
                                <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M30.3956 8.44367C30.3956 11.7504 25.7402 10.9261 19.9986 10.9261C14.2566 10.9261 9.60156 11.7504 9.60156 8.44367C9.60156 5.13691 14.2566 0.828674 19.9986 0.828674C25.7406 0.828674 30.3956 5.13701 30.3956 8.44367Z" fill="#044396" />
                                  <path d="M9.26504 38.6267C9.26504 32.6993 14.071 27.8933 19.9984 27.8933C25.9257 27.8933 30.7317 32.6993 30.7317 38.6267C30.7317 38.8095 30.7238 38.9907 30.7145 39.1715H37.0049C36.9633 32.3071 33.1922 26.3678 27.7002 23.4508C25.6542 25.284 22.9549 26.4012 19.9962 26.4012C17.0398 26.4012 14.3405 25.284 12.2969 23.4508C6.80586 26.3692 3.03452 32.3071 2.99219 39.1715H9.28252C9.27328 38.9906 9.26533 38.8095 9.26533 38.6267H9.26504Z" fill="#044396" />
                                  <path d="M17.0018 38.25L11.9648 35.578C11.6048 36.5268 11.3984 37.5512 11.3984 38.626C11.3984 38.81 11.4112 38.9905 11.4245 39.1708H16.8501C16.8585 38.8508 16.9081 38.5408 17.0017 38.25H17.0018Z" fill="#044396" />
                                  <path d="M28.599 38.6267C28.599 37.5514 28.3926 36.5274 28.0326 35.5786L23.2383 38.1219C23.3591 38.4507 23.4294 38.8035 23.4398 39.1715H28.5735C28.5864 38.991 28.5992 38.8103 28.5992 38.6267H28.599Z" fill="#044396" />
                                  <path d="M20.1458 35.96C20.7486 35.96 21.3114 36.1241 21.7973 36.406L27.0027 33.6452C25.443 31.4579 22.8913 30.0272 20.0013 30.0272C17.111 30.0272 14.5597 31.458 13 33.6452L18.3593 36.488C18.8744 36.1552 19.4868 35.96 20.1457 35.96H20.1458Z" fill="#044396" />
                                  <path d="M20.0015 24.3007C25.1931 24.3007 29.4015 20.0923 29.4015 14.9007C29.4015 13.7298 29.1858 12.6095 28.7943 11.5759C27.6011 11.9236 26.2239 11.9244 25.24 11.9244C24.5004 11.9244 23.7128 11.9035 22.8788 11.8823C21.9535 11.858 20.9963 11.8331 20.0016 11.8331C19.0068 11.8331 18.0496 11.8578 17.124 11.8823C16.29 11.9039 15.5024 11.9244 14.7632 11.9244C13.5871 11.9244 12.2776 11.8767 11.2095 11.574C10.818 12.6083 10.6016 13.7292 10.6016 14.9004C10.6016 20.0921 14.8099 24.3007 20.0016 24.3007L20.0015 24.3007Z" fill="#044396" />
                                </svg>
                              </span>
                              <p class="p-single-column__quoteText"><?php echo nl2br(esc_html($content_block['text'] ?? '')); ?></p>
                            </div>
                          <?php elseif (($content_block['type'] ?? '') === 'image' && !empty($content_block['url'])) : ?>
                            <figure class="p-single-column__contentImage">
                              <img
                                class="p-single-column__contentImageImg"
                                decoding="async"
                                loading="lazy"
                                src="<?php echo esc_url($content_block['url']); ?>"
                                alt="<?php echo esc_attr($content_block['alt'] ?? ''); ?>"
                                width="<?php echo esc_attr((string) max(1, (int) ($content_block['width'] ?? 1))); ?>"
                                height="<?php echo esc_attr((string) max(1, (int) ($content_block['height'] ?? 1))); ?>">
                            </figure>
                          <?php elseif (($content_block['type'] ?? '') === 'text') : ?>
                            <p class="p-single-column__text"><?php echo nl2br(esc_html($content_block['text'] ?? '')); ?></p>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </div>
                    </section>
                  <?php endforeach; ?>

                  <?php if (!empty($faq_items)) : ?>
                    <section class="p-single-column__section" id="<?php echo esc_attr($faq_id); ?>">
                      <div class="p-single-column__sectionHead">
                        <h2 class="p-single-column__sectionTitle"><?php echo esc_html($faq_heading); ?></h2>
                        <span class="p-single-column__sectionLine" aria-hidden="true"></span>
                      </div>

                      <div class="p-single-column__faq">
                        <?php foreach ($faq_items as $i => $faq_item) : ?>
                          <details class="p-single-column__faqItem js-details" <?php echo $i === 0 ? 'open' : ''; ?>>
                            <summary class="p-single-column__faqQuestion js-summary">
                              <span class="p-single-column__faqQuestionInner">
                                <span class="p-single-column__faqLabel p-single-column__faqLabel--q">Q</span>
                                <span class="p-single-column__faqQuestionText"><?php echo esc_html($faq_item['question']); ?></span>
                              </span>
                              <span class="p-single-column__faqToggle" aria-hidden="true"></span>
                            </summary>
                            <div class="p-single-column__faqAnswer js-content">
                              <div class="p-single-column__faqAnswerInner">
                                <span class="p-single-column__faqLabel p-single-column__faqLabel--a">A</span>
                                <p class="p-single-column__faqAnswerText"><?php echo nl2br(esc_html($faq_item['answer'])); ?></p>
                              </div>
                            </div>
                          </details>
                        <?php endforeach; ?>
                      </div>
                    </section>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

              <div class="p-single-column__backWrapper">
                <a class="p-single-column__back" href="<?php echo esc_url($column_archive_url); ?>">
                  <span class="p-single-column__backIcon" aria-hidden="true">
                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.14417 9.375L16.25 9.375V10.625L6.14417 10.625L10.891 15.3719L10 16.25L3.75 10L10 3.75L10.891 4.62813L6.14417 9.375Z" fill="#044396" />
                    </svg>
                  </span>
                  <span class="p-single-column__backDivider" aria-hidden="true"></span>
                  <span class="p-single-column__backText">一覧に戻る</span>
                </a>
              </div>
            </article>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>