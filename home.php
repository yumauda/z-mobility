<?php get_header(); ?>
<main>
<?php
  get_template_part('includes/page-mv', null, [
    'title_ja' => 'お知らせ',
    'title_en_lines' => ['News'],
    'pan_current' => 'お知らせ',
  ]);
  ?>
  <section class="p-news">
    <div class="l-inner">
      <div class="p-news__content">
        <div class="p-news__categories" aria-label="お知らせカテゴリ">
          <button class="p-news__category is-active" type="button">すべて</button>
          <button class="p-news__category" type="button">お知らせ</button>
          <button class="p-news__category" type="button">採用</button>
          <button class="p-news__category" type="button">イベント</button>
        </div>

        <div class="p-news__list">
          <a class="p-news__item" href="<?php the_permalink(); ?>">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">
                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
              </p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">親譲りの無鉄砲で小供の時から損ばかりしている。</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-news__item" href="#">
            <div class="p-news__meta">
              <time class="p-news__date" datetime="2026-02-01">2026.02.01</time>
              <span class="p-news__tag">お知らせ</span>
            </div>
            <div class="p-news__main">
              <p class="p-news__title">3月会社説明会のお知らせ</p>
              <span class="p-news__btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>
        </div>

      </div>
      <nav class="p-news__pager" aria-label="ページネーション">
        <a class="p-news__pagerBtn is-disabled" href="#" aria-disabled="true" tabindex="-1">
          <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
        </a>
        <a class="p-news__page is-current" href="#" aria-current="page">1</a>
        <a class="p-news__page" href="#">2</a>
        <a class="p-news__page" href="#">3</a>
        <a class="p-news__page" href="#">4</a>
        <a class="p-news__page" href="#">5</a>
        <a class="p-news__pagerBtn" href="#">
          <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/pager-arrow.svg" alt="" width="24" height="24">
        </a>
      </nav>
    </div>
  </section>

 


</main>
<?php get_footer() ?>