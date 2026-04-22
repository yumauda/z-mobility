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
                  代表が語る「豊かで楽しい人生」を実現する働き方。高収入とやりがい、プライベートの充実を両立できる理由や、仕事に向き合う価値観・考え方、事業の成長背景についても分かりやすくご紹介します。
                </p>
              </div>
              <span class="p-page-company__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-btn.svg" alt="" width="48" height="48">
              </span>
            </div>

            <figure class="p-page-company__card-media" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-message.webp" alt="" width="600" height="338">
            </figure>
          </div>
        </a>

        <a class="p-page-company__card" href="<?php echo esc_url(home_url('/company/information')); ?>">
          <div class="p-page-company__card-inner">
            <div class="p-page-company__card-body">
              <div class="p-page-company__card-texts">
                <p class="p-page-company__card-title">会社概要</p>
                <p class="p-page-company__card-text">
                  会社の基本情報や拠点一覧、事業内容をまとめたページです。営業所の所在地やアクセス、グループ企業の展開など、Zの事業規模や運営体制について全体像を確認できます。
                </p>
              </div>
              <span class="p-page-company__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-btn.svg" alt="" width="48" height="48">
              </span>
            </div>

            <figure class="p-page-company__card-media" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/company/company-information.webp" alt="" width="600" height="338">
            </figure>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>