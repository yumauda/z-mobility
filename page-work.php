<?php get_header(); ?>
<main>
 
  <?php
  get_template_part('includes/page-mv', null, [
    'title_ja' => '仕事について',
    'title_en_lines' => ['Work'],
    'pan_current' => '仕事について',
  ]);
  ?>

  <section class="p-front-work pt-96 pb-260">
    
    <div class="l-inner">
      <div class="p-front-work__cards mt-0">
        <a class="p-front-work__card p-front-work__card--large" href="<?php echo esc_url(home_url('/work/description')); ?>">
          <div class="p-front-work__card-inner">
            <div class="p-front-work__card-content p-front-work__card-content--large">
              <figure class="p-front-work__card-img p-front-work__card-img--large">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work-card-large.webp" alt="" width="600" height="380">
              </figure>
              <div class="p-front-work__card-body p-front-work__card-body--large">
                <div class="p-front-work__card-head">
                  <p class="p-front-work__card-subtitle p-front-work__card-subtitle--large">Job Description</p>
                  <p class="p-front-work__card-title p-front-work__card-title--large">Z MOBILITYの仕事について</p>
                </div>
                <p class="p-front-work__card-text p-front-work__card-text--large">
                Uberプレミアムのお客様をメインターゲットとし、アルフアードなどの高級車でお客様を送迎する、新しいスタイルのハイヤードライバーの仕事です。流し営業のなく予約専門で、配車もナビも決済も最新アプリひとつで完結し、効率よく働けることが特徴です。Uberはグローバル配車アプリなので、インバウンド需要の成長と共に、安定して稼ぐことができます。
                </p>
              </div>
            </div>
            <span class="p-front-work__card-btn p-front-work__card-btn--m" aria-hidden="true">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-m.svg" alt="" width="48" height="48">
            </span>
          </div>
        </a>
        <div class="p-front-work__grid">

          <a class="p-front-work__card" href="<?php echo esc_url(home_url('/work/hire')); ?>">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_2.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_2_sp.png" alt="Z MOBILITY のハイヤーとは" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">Hire introduction</p>
                    <p class="p-front-work__card-title">Z MOBILITY のハイヤーとは</p>
                  </div>
                  <p class="p-front-work__card-text">日本のプレミアムな移動体験（おもてなし）を提供する仕事です。空港送迎や観光などで、お客様一人ひとりに丁寧に向き合い、接客や振る舞いによりお客様を笑顔にする仕事です。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-front-work__card" href="<?php echo esc_url(home_url('/work/education')); ?>">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_3.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_3_sp.png" alt="二種免許支援教育体制" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">Educational System</p>
                    <p class="p-front-work__card-title">二種免許支援<br class="u-mobile">教育体制</p>
                  </div>
                  <p class="p-front-work__card-text">未経験からプロへ育つ研修体制。二種免許取得支援や実践型研修、同乗指導まで段階的に学べ、安心して着実に成長できる体制です。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s2.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-front-work__card" href="<?php echo esc_url(home_url('/work/numbers')); ?>">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_4.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_4_sp.png" alt="数字で見るZ" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">In Numbers</p>
                    <p class="p-front-work__card-title">数字で見るZ</p>
                  </div>
                  <p class="p-front-work__card-text">年齢層や前職、入社の決め手など、私たちの「今」を数字でご紹介します。入社前の不安がどう変化したのか、現在の働き方への満足度など、リアルを公開しています。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s3.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>

          <a class="p-front-work__card" href="<?php echo esc_url(home_url('/work/faq')); ?>">
            <div class="p-front-work__card-inner">
              <div class="p-front-work__card-content">
                <figure class="p-front-work__card-img">
                  <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_5.webp" media="(min-width: 768px)" width="188" height="233" />
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work_5_sp.png" alt="よくある質問" width="188" height="233">
                  </picture>
                </figure>
                <div class="p-front-work__card-body">
                  <div class="p-front-work__card-head">
                    <p class="p-front-work__card-subtitle">FAQ</p>
                    <p class="p-front-work__card-title">よくある質問</p>
                  </div>
                  <p class="p-front-work__card-text">応募前によくある不安や疑問にお答えします。未経験からのスタートや働き方、研修内容まで分かりやすく解説し、気になるポイントを事前に解消できます。</p>
                </div>
              </div>
              <span class="p-front-work__card-btn" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/work/work-btn-s4.svg" alt="" width="28" height="28">
              </span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  
  

  

  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>