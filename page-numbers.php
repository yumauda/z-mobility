<?php
$number_sections = [
  [
    'label_en' => 'About Z',
    'label_ja' => 'Zドライバーについて',
    'alt' => 'Zドライバーについてのデータ',
    'pc' => 'numbers-about-body-pc.webp',
    'pc_width' => 630,
    'pc_height' => 368,
    'sp' => 'numbers-about-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 184,
  ],
  [
    'label_en' => 'Changing Jobs / Joining a Company',
    'label_ja' => '転職・入社について',
    'alt' => '転職・入社についてのデータ',
    'pc' => 'numbers-joining-body-pc.webp',
    'pc_width' => 630,
    'pc_height' => 368,
    'sp' => 'numbers-joining-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 184,
  ],
  [
    'label_en' => 'Information Sessions & Licenses',
    'label_ja' => '説明会・二種免許について',
    'label_ja_sp_break' => '説明会・',
    'alt' => '説明会・二種免許についてのデータ',
    'pc' => 'numbers-license-body-pc.webp',
    'pc_width' => 630,
    'pc_height' => 368,
    'sp' => 'numbers-license-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 184,
  ],
  [
    'label_en' => 'Work Style',
    'label_ja' => '入社後・働き方について',
    'alt' => '入社後・働き方についてのデータ',
    'pc' => 'numbers-workstyle-body-pc.webp',
    'pc_width' => 630,
    'pc_height' => 368,
    'sp' => 'numbers-workstyle-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 184,
  ],
];
?>
<?php get_header(); ?>
<main>
  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => '数字で見るZ',
    'title_en_lines' => ['In Numbers'],
    'pan_current' => '数字で見るZ',
    'pan_parent_label' => '仕事について',
    'pan_parent_url' => home_url('/work/'),
  ]);
  ?>

  <section class="p-numbers">
    <div class="l-inner">
      <div class="p-numbers__content">
        <?php foreach ($number_sections as $section) : ?>
          <section class="p-numbers__section">
            <div class="p-numbers__head">
              <p class="p-numbers__eyebrow"><?php echo esc_html($section['label_en']); ?></p>
              <h2 class="p-numbers__title">
                <?php
                if (!empty($section['label_ja_sp_break']) && str_starts_with($section['label_ja'], $section['label_ja_sp_break'])) :
                  $title_prefix = $section['label_ja_sp_break'];
                  $title_suffix = substr($section['label_ja'], strlen($title_prefix));
                ?>
                  <?php echo esc_html($title_prefix); ?><br class="u-mobile"><?php echo esc_html($title_suffix); ?>
                <?php else : ?>
                  <?php echo esc_html($section['label_ja']); ?>
                <?php endif; ?>
              </h2>
            </div>

            <figure class="p-numbers__image">
              <picture>
                <source
                  media="(min-width: 768px)"
                  srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/numbers/<?php echo esc_attr($section['pc']); ?>">
                <img
                  decoding="async"
                  loading="lazy"
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/numbers/<?php echo esc_attr($section['sp']); ?>"
                  alt="<?php echo esc_attr($section['alt']); ?>"
                  width="<?php echo esc_attr((string) $section['sp_width']); ?>"
                  height="<?php echo esc_attr((string) $section['sp_height']); ?>">
              </picture>
            </figure>
          </section>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer(); ?>