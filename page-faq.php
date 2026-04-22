<?php
$faq_sections = function_exists('zm_get_faq_sections') ? zm_get_faq_sections() : [];

$render_faq_text = static function ($text, $paragraph_class) {
  $normalized = str_replace(["\r\n", "\r"], "\n", (string) $text);
  $normalized = str_replace("\n_\n", "\n\n", $normalized);
  $paragraphs = preg_split("/\n{2,}/", trim($normalized)) ?: [];
  $html = '';

  foreach ($paragraphs as $paragraph) {
    $paragraph = trim($paragraph);
    if ($paragraph === '') {
      continue;
    }

    $html .= '<p class="' . esc_attr($paragraph_class) . '">' . nl2br(esc_html($paragraph)) . '</p>';
  }

  return $html;
};
?>

<?php get_header(); ?>
<main>
  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => 'よくある質問',
    'title_en_lines' => ['FAQ'],
    'pan_current' => 'よくある質問',
    'pan_parent_label' => '仕事について',
    'pan_parent_url' => home_url('/work/'),
  ]);
  ?>

  <section class="p-faq">
    <div class="l-inner">
      <div class="p-faq__content">
        <?php foreach ($faq_sections as $section) : ?>
          <section class="p-faq__section">
            <div class="p-faq__heading">
              <p class="p-faq__headingEn"><?php echo esc_html($section['label_en']); ?></p>
              <h2 class="p-faq__headingJa"><?php echo esc_html($section['label_ja']); ?></h2>
            </div>

            <div class="p-faq__items">
              <?php foreach ($section['items'] as $item) : ?>
                <details class="p-faq__item js-details" <?php echo !empty($item['open']) ? 'open' : ''; ?>>
                  <summary class="p-faq__summary js-summary">
                    <span class="p-faq__summaryHead">
                      <span class="p-faq__questionLabel">Q</span>
                      <span class="p-faq__question"><?php echo esc_html($item['question']); ?></span>
                    </span>
                    <span class="p-faq__icon" aria-hidden="true">
                      <span class="p-faq__iconLine"></span>
                      <span class="p-faq__iconLine p-faq__iconLine--vertical"></span>
                    </span>
                  </summary>

                  <div class="p-faq__answer js-content">
                    <div class="p-faq__answerInner">
                      <div class="p-faq__answerPanel">
                        <span class="p-faq__answerLabel">A</span>
                        <div class="p-faq__answerBody">
                          <div class="p-faq__answerText">
                            <?php echo $render_faq_text($item['answer'], 'p-faq__answerParagraph'); ?>
                          </div>
                          <?php if (!empty($item['note'])) : ?>
                            <div class="p-faq__answerNote">
                              <?php echo $render_faq_text($item['note'], 'p-faq__answerNoteParagraph'); ?>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </details>
              <?php endforeach; ?>
            </div>
          </section>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer(); ?>