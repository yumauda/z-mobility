<?php get_header(); ?>
<main>
  
  <?php
  get_template_part('includes/page-mv', null, [
    'title_ja' => '会社情報',
    'title_en_lines' => ['Company'],
    'pan_current' => '会社情報',
  ]);
  ?>

  <section class="p-page-company">
    <div class="l-inner">
      <div class="p-page-company__content">
        <a class="p-page-company__card" href="<?php echo esc_url(home_url('/company/message')); ?>">
          <div class="p-page-company__card-inner">
            <div class="p-page-company__card-body">
              <div class="p-page-company__card-texts">
                <p class="p-page-company__card-title">代表メッセージ</p>
                <p class="p-page-company__card-text">
                  親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                </p>
              </div>
              <span class="p-page-company__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-btn.svg" alt="" width="48" height="48">
              </span>
            </div>

            <figure class="p-page-company__card-media" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-message.png" alt="" width="600" height="338">
            </figure>
          </div>
        </a>

        <a class="p-page-company__card" href="<?php echo esc_url(home_url('/company/information')); ?>">
          <div class="p-page-company__card-inner">
            <div class="p-page-company__card-body">
              <div class="p-page-company__card-texts">
                <p class="p-page-company__card-title">会社概要</p>
                <p class="p-page-company__card-text">
                  親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
                </p>
              </div>
              <span class="p-page-company__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-btn.svg" alt="" width="48" height="48">
              </span>
            </div>

            <figure class="p-page-company__card-media" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-information.png" alt="" width="600" height="338">
            </figure>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>