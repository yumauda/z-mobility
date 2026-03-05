<?php get_header(); ?>
<main>
  <section class="p-single">
    <div class="l-inner">
      <div class="p-single__content">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="p-single__article">
              <header class="p-single__header">
                <div class="p-single__meta">
                  <time class="p-single__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>
                  <?php
                  $z_categories = get_the_category();
                  $z_category_name = (!empty($z_categories) && isset($z_categories[0])) ? $z_categories[0]->name : '';
                  ?>
                  <?php if ($z_category_name !== '') : ?>
                    <span class="p-single__category"><?php echo esc_html($z_category_name); ?></span>
                  <?php endif; ?>
                </div>
                <h1 class="p-single__title"><?php the_title(); ?></h1>
              </header>

              <?php if (has_post_thumbnail()) : ?>
                <figure class="p-single__thumb">
                  <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                </figure>
              <?php endif; ?>

              <div class="p-single__body">
                <div class="p-single__entry">
                  <?php the_content(); ?>
                </div>
              </div>
            </article>

            <div class="p-single__backWrapper">
              <a class="p-single__back" href="<?php echo esc_url(home_url('/blog-all')); ?>">
                <svg class="p-single__backIcon" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.373 11.25L19.5 11.25L19.5 12.75L7.373 12.75L13.0692 18.4462L12 19.5L4.5 12L12 4.5L13.0692 5.55375L7.373 11.25Z" fill="currentColor"/>
                </svg>
                <span class="p-single__backDivider" aria-hidden="true"></span>
                <span class="p-single__backText">一覧に戻る</span>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  
</main>
<?php get_footer() ?>