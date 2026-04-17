<?php get_header(); ?>
<main>
  <?php
  $column_base_uri = esc_url(get_template_directory_uri() . '/images/column');
  $static_columns = [
    [
      'image' => 'column-1.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'インタビュー',
    ],
    [
      'image' => 'column-2.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-3.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-4.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-3.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-2.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-4.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-3.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-1.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-4.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-2.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
    [
      'image' => 'column-3.png',
      'title' => '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。',
      'date' => '2026.01.30',
      'datetime' => '2026-01-30',
      'category' => 'カテゴリ',
    ],
  ];

  get_template_part('includes/page-mv', null, [
    'title_ja' => 'コラム',
    'title_en_lines' => ['Column'],
    'pan_current' => 'コラム',
  ]);
  ?>

  <section class="p-column-archive">
    <div class="l-inner">
      <div class="p-column-archive__grid">
        <?php foreach ($static_columns as $column) : ?>
          <article class="p-column-archive__item">
            <a class="p-column-archive__card" href="<?php the_permalink(); ?>">
              <figure class="p-column-archive__thumb">
                <img
                  class="p-column-archive__img"
                  decoding="async"
                  loading="lazy"
                  src="<?php echo esc_url($column_base_uri . '/' . $column['image']); ?>"
                  alt="<?php echo esc_attr($column['title']); ?>"
                  width="395"
                  height="222">
              </figure>

              <div class="p-column-archive__body">
                <h2 class="p-column-archive__title"><?php echo esc_html($column['title']); ?></h2>

                <div class="p-column-archive__meta">
                  <time class="p-column-archive__date" datetime="<?php echo esc_attr($column['datetime']); ?>">
                    <?php echo esc_html($column['date']); ?>
                  </time>
                  <span class="p-column-archive__category"><?php echo esc_html($column['category']); ?></span>
                </div>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <nav class="p-column-archive__pager" aria-label="ページネーション">
        <span class="p-column-archive__pagerBtn is-prev is-disabled" aria-disabled="true">
          <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
        </span>
        <span class="p-column-archive__page is-current" aria-current="page">1</span>
        <a class="p-column-archive__page" href="#">2</a>
        <a class="p-column-archive__page" href="#">3</a>
        <a class="p-column-archive__page" href="#">4</a>
        <a class="p-column-archive__page" href="#">5</a>
        <a class="p-column-archive__pagerBtn is-next" href="#">
          <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
        </a>
      </nav>
    </div>
  </section>
</main>
<?php get_footer(); ?>
