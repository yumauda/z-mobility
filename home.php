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
        <?php $news_categories = get_categories(['hide_empty' => true]); ?>
        <div class="p-news__categories" aria-label="お知らせカテゴリ">
          <a class="p-news__category is-active" href="<?php echo esc_url(home_url('/news/')); ?>">すべて</a>
          <?php foreach ($news_categories as $news_category) : ?>
            <a class="p-news__category" href="<?php echo esc_url(get_category_link($news_category->term_id)); ?>">
              <?php echo esc_html($news_category->name); ?>
            </a>
          <?php endforeach; ?>
        </div>

        <div class="p-news__list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
              $categories = get_the_category();
              $category_name = '';
              if (!empty($categories) && !is_wp_error($categories)) {
                $category_name = $categories[0]->name;
              }
              ?>
              <article class="p-news__article">
                <a class="p-news__item" href="<?php the_permalink(); ?>">
                  <div class="p-news__meta">
                    <time class="p-news__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                    <?php if ($category_name !== '') : ?>
                      <span class="p-news__tag"><?php echo esc_html($category_name); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="p-news__main">
                    <h2 class="p-news__title"><?php the_title(); ?></h2>
                    <span class="p-news__btn" aria-hidden="true">
                      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/news/news-item-btn.svg" alt="" width="28" height="28">
                    </span>
                  </div>
                </a>
              </article>
            <?php endwhile; ?>
          <?php else : ?>
            <p class="p-news__empty">記事がありません。</p>
          <?php endif; ?>
        </div>

      </div>
      <?php
      $pagination_links = paginate_links([
        'type' => 'array',
        'current' => max(1, get_query_var('paged')),
        'total' => max(1, (int) $wp_query->max_num_pages),
        'prev_next' => true,
        'prev_text' => '<img decoding="async" loading="lazy" src="' . esc_url(get_template_directory_uri()) . '/images/page/news/pager-arrow.svg" alt="" width="24" height="24">',
        'next_text' => '<img decoding="async" loading="lazy" src="' . esc_url(get_template_directory_uri()) . '/images/page/news/pager-arrow.svg" alt="" width="24" height="24">',
      ]);
      ?>
      <?php if (!empty($pagination_links) && is_array($pagination_links)) : ?>
        <nav class="p-news__pager" aria-label="ページネーション">
          <?php foreach ($pagination_links as $link) : ?>
            <?php
            if (str_contains($link, 'prev page-numbers')) {
              $link = str_replace('page-numbers', 'p-news__pagerBtn', $link);
              $link = str_replace('prev', 'prev is-prev', $link);
            } elseif (str_contains($link, 'next page-numbers')) {
              $link = str_replace('page-numbers', 'p-news__pagerBtn', $link);
              $link = str_replace('next', 'next is-next', $link);
            } elseif (str_contains($link, 'current')) {
              $link = str_replace('page-numbers current', 'p-news__page is-current', $link);
            } elseif (str_contains($link, 'page-numbers')) {
              $link = str_replace('page-numbers', 'p-news__page', $link);
            }

            echo $link;
            ?>
          <?php endforeach; ?>
        </nav>
      <?php endif; ?>
    </div>
  </section>
  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer() ?>