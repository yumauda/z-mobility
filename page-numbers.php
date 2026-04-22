<?php
$number_sections = [
  [
    'label_en' => 'About Z',
    'label_ja' => 'Zドライバーについて',
    'alt' => 'Zドライバーについてのデータ',
    'pc' => 'numbers-about-body-pc.webp',
    'pc_width' => 1280,
    'pc_height' => 651,
    'sp' => 'numbers-about-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 873,
  ],
  [
    'label_en' => 'Changing Jobs / Joining a Company',
    'label_ja' => '転職・入社について',
    'alt' => '転職・入社についてのデータ',
    'pc' => 'numbers-joining-body-pc.webp',
    'pc_width' => 1280,
    'pc_height' => 875,
    'sp' => 'numbers-joining-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 1781,
  ],
  [
    'label_en' => 'Information Sessions',
    'label_ja' => '説明会について',
    'label_ja_sp_break' => '説明会について',
    'alt' => '説明会についてのデータ',
    'pc' => 'numbers-license-body-pc.webp',
    'pc_width' => 1280,
    'pc_height' => 349,
    'sp' => 'numbers-license-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 854,
  ],
  [
    'label_en' => 'Licenses',
    'label_ja' => '二種免許について',
    'label_ja_sp_break' => '二種免許について',
    'alt' => '説明会についてのデータ',
    'pc' => 'numbers-licenses-body-pc.webp',
    'pc_width' => 1280,
    'pc_height' => 349,
    'sp' => 'numbers-licenses-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 854,
  ],
  [
    'label_en' => 'Work Style',
    'label_ja' => '入社後・働き方について',
    'alt' => '入社後・働き方についてのデータ',
    'pc' => 'numbers-workstyle-body-pc.webp',
    'pc_width' => 1280,
    'pc_height' => 880,
    'sp' => 'numbers-workstyle-body-sp.webp',
    'sp_width' => 335,
    'sp_height' => 1764,
  ],
];

$episode_items = [
  '英語が話せない自分が、外国人の方に単語や翻訳機を使いコミュニケーションや会話をして喜んで頂いた。',
  'また乗車したい、指名できますか？など言われた時がとても嬉しかった。',
  '羽田空港に行き、少し休憩して出ようとしたタイミングでアプリから予約が入りました。そのままお客様をお乗せしたところ、行き先が成田空港で、とても驚きました。初勤務のときの出来事です。',
  '降車間際、プロの音楽家のお客様が車内で一曲披露してくださいました。思わぬサプライズに感動し、特別な瞬間でした。',
  'ある芸能人の方ご乗車された時、急に雨が降って来た為車に積んである傘を差し上げたらお返しにその方のグッズ(エコバッグ)をいただき妻が使っています。',
  'フェンシング経験のあるポルトガル人男性を、トランプ大統領来日の渋滞の中、東京駅までご案内しました。「大刀剣市」の意味を英語で説明したところ大変喜ばれ、3,000円の運賃に6,000円のチップをいただきました。',
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
  <section class="p-episode">
    <div class="l-inner">
      <div class="p-episode__content">
        <div class="p-episode__head">
          <p class="p-episode__eyebrow">Episode</p>
          <h2 class="p-episode__title">ドライバーやっていて印象に残ったエピソード</h2>
        </div>

        <div class="p-episode__cards">
          <?php foreach ($episode_items as $episode_item) : ?>
            <div class="p-episode__card">
              <span class="p-episode__icon" aria-hidden="true">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 44V8C4 6.9 4.39167 5.95833 5.175 5.175C5.95833 4.39167 6.9 4 8 4H40C41.1 4 42.0417 4.39167 42.825 5.175C43.6083 5.95833 44 6.9 44 8V32C44 33.1 43.6083 34.0417 42.825 34.825C42.0417 35.6083 41.1 36 40 36H12L4 44Z" fill="#044396" />
                </svg>

              </span>
              <p class="p-episode__text"><?php echo esc_html($episode_item); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer(); ?>