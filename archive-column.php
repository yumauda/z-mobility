<?php get_header(); ?>
<main>
  <?php
  $column_base_uri = esc_url(get_template_directory_uri() . '/images/column');
  $column_archive_url = get_post_type_archive_link('column') ?: home_url('/column/');
  $paged = max(1, (int) get_query_var('paged'));
  $max_num_pages = isset($wp_query->max_num_pages) ? (int) $wp_query->max_num_pages : 1;
  $column_terms = get_terms([
    'taxonomy' => 'allcolumn_category',
    'hide_empty' => true,
  ]);

  $get_column_category = static function ($post_id) {
    if (function_exists('get_field')) {
      $display_category = trim((string) get_field('column_display_category', $post_id));
      if ($display_category !== '') {
        return $display_category;
      }
    }

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
  };

  get_template_part('includes/page-mv', null, [
    'title_ja' => 'コラム',
    'title_en_lines' => ['Column'],
    'pan_current' => 'コラム',
  ]);
  ?>

  <section class="p-column-archive">
    <div class="l-inner">
      <?php if (is_array($column_terms) && !empty($column_terms)) : ?>
        <div class="p-column-archive__categories" aria-label="コラムカテゴリー">
          <a class="p-column-archive__categoryLink is-active" href="<?php echo esc_url($column_archive_url); ?>">すべて</a>
          <?php foreach ($column_terms as $column_term) : ?>
            <a class="p-column-archive__categoryLink" href="<?php echo esc_url(get_term_link($column_term)); ?>">
              <?php echo esc_html($column_term->name); ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="p-column-archive__grid">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php
            $post_id = get_the_ID();
            $thumbnail_id = get_post_thumbnail_id($post_id);
            $thumbnail_data = $thumbnail_id ? wp_get_attachment_image_src($thumbnail_id, 'full') : false;
            $thumbnail_url = $thumbnail_data ? $thumbnail_data[0] : '';
            $thumbnail_width = $thumbnail_data ? (int) $thumbnail_data[1] : 395;
            $thumbnail_height = $thumbnail_data ? (int) $thumbnail_data[2] : 222;
            $thumbnail_alt = $thumbnail_id ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true) : '';
            $category = $get_column_category($post_id);

            if ($thumbnail_alt === '') {
              $thumbnail_alt = get_the_title();
            }
            ?>
            <article class="p-column-archive__item">
              <a class="p-column-archive__card" href="<?php the_permalink(); ?>">
                <figure class="p-column-archive__thumb">
                  <?php if ($thumbnail_url !== '') : ?>
                    <img
                      class="p-column-archive__img"
                      decoding="async"
                      loading="lazy"
                      src="<?php echo esc_url($thumbnail_url); ?>"
                      alt="<?php echo esc_attr($thumbnail_alt); ?>"
                      width="<?php echo esc_attr((string) $thumbnail_width); ?>"
                      height="<?php echo esc_attr((string) $thumbnail_height); ?>">
                  <?php else : ?>
                    <div class="p-column-archive__placeholder" aria-hidden="true">
                      <span class="p-column-archive__placeholderText">COLUMN</span>
                    </div>
                  <?php endif; ?>
                </figure>

                <div class="p-column-archive__body">
                  <h2 class="p-column-archive__title"><?php the_content()?></h2>

                  <div class="p-column-archive__meta">
                    <time class="p-column-archive__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                      <?php echo esc_html(get_the_date('Y.m.d')); ?>
                    </time>
                    <?php if ($category !== '') : ?>
                      <span class="p-column-archive__category"><?php echo esc_html($category); ?></span>
                    <?php endif; ?>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <p class="p-column-archive__empty">コラムはまだありません。</p>
        <?php endif; ?>
      </div>

      <?php if ($max_num_pages > 1) : ?>
        <nav class="p-column-archive__pager" aria-label="ページネーション">
          <?php if ($paged > 1) : ?>
            <a class="p-column-archive__pagerBtn is-prev" href="<?php echo esc_url(get_pagenum_link($paged - 1)); ?>">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
            </a>
          <?php else : ?>
            <span class="p-column-archive__pagerBtn is-prev is-disabled" aria-disabled="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
            </span>
          <?php endif; ?>

          <?php
          $pagination_links = paginate_links([
            'type' => 'array',
            'current' => $paged,
            'total' => $max_num_pages,
            'mid_size' => 2,
            'prev_next' => false,
          ]);
          ?>
          <?php if (is_array($pagination_links)) : ?>
            <?php foreach ($pagination_links as $pagination_link) : ?>
              <?php if (strpos($pagination_link, 'current') !== false) : ?>
                <span class="p-column-archive__page is-current" aria-current="page"><?php echo wp_kses_post(strip_tags($pagination_link)); ?></span>
              <?php else : ?>
                <?php
                $pagination_link = str_replace('page-numbers', 'p-column-archive__page', $pagination_link);
                echo wp_kses($pagination_link, [
                  'a' => [
                    'class' => true,
                    'href' => true,
                    'aria-current' => true,
                  ],
                  'span' => [
                    'class' => true,
                    'aria-current' => true,
                  ],
                ]);
                ?>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>

          <?php if ($paged < $max_num_pages) : ?>
            <a class="p-column-archive__pagerBtn is-next" href="<?php echo esc_url(get_pagenum_link($paged + 1)); ?>">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
            </a>
          <?php else : ?>
            <span class="p-column-archive__pagerBtn is-next is-disabled" aria-disabled="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
            </span>
          <?php endif; ?>
        </nav>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
