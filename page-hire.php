<?php get_header(); ?>
<main>

  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => 'Z MOBILITY のハイヤーとは',
    'title_en_lines' => ['Hire Introduction'],
    'pan_current' => 'Z MOBILITY のハイヤーとは',
    'pan_parent_label' => '仕事について',
    'pan_parent_url' => home_url('/work/'),
  ]);
  ?>

  <section class="p-description pb0">
    <div class="l-inner">
      <div class="p-description__content">
        <div class="p-description__section">
          <div class="p-description__head">
            <h1 class="p-description__title p-description__title--small">日本での移動体験を、<br>あなたがつくる。</h1>
            <p class="p-description__text p-description__text--small">
              空港に降り立った瞬間から、その人の日本は始まっています。<br>
              あなたがご案内するのは、ただの移動ではありません。
            </p>
          </div>

          <figure class="p-description__image p-description__image--80">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/hire/hire-main.webp" alt="Z MOBILITYのハイヤーサービスのイメージ" width="1440" height="500">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="p-what">
    <div class="l-inner">
      <div class="p-what__content">
        <div class="p-what__head">
          <p class="p-what__eyebrow">What is Hire</p>
          <h2 class="p-what__title">事前予約のお客様だけを、<br>丁寧にご案内する仕事</h2>
        </div>

        <div class="p-what__body">
          <p class="p-what__text">
            ハイヤーとは、ご予約いただいたお客様をお迎えし、<br>
            目的地までご案内するサービスです。<br>
            
            街でお客様を探すことはありません。<br>
            
            一つひとつのご案内を、丁寧に積み重ねていく仕事です。<br>
            
            求められるのはスピードではなく、<br>
            「安心」と「快適さ」。<br>
            
            Z では、Uber プレミアムを中心としたサービスを提供しています。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-difference">
    <div class="l-inner">
      <div class="p-difference__content">
        <div class="p-difference__head">
          <p class="p-difference__eyebrow">Difference</p>
          <h2 class="p-difference__title">タクシーとの違い</h2>
        </div>

        <p class="p-difference__text">
          ハイヤーは、タクシーのように街でお客様を探す仕事ではありません。 事前にご予約いただいたお客様だけをお迎えするサービスです。<br>
          件数より質が問われる分、一件一件に集中して向き合える仕事です。
        </p>

        <div class="p-difference__cards">
          <div class="p-difference__card">
            <div class="p-difference__cardInner">
              <span class="p-difference__cardIcon" aria-hidden="true"></span>
              <p class="p-difference__cardText">流し営業なし</p>
            </div>
          </div>
          <div class="p-difference__card">
            <div class="p-difference__cardInner">
              <span class="p-difference__cardIcon" aria-hidden="true"></span>
              <p class="p-difference__cardText">事前予約のみ</p>
            </div>
          </div>
          <div class="p-difference__card">
            <div class="p-difference__cardInner">
              <span class="p-difference__cardIcon" aria-hidden="true"></span>
              <p class="p-difference__cardText">単価が高い</p>
            </div>
          </div>
          <div class="p-difference__card">
            <div class="p-difference__cardInner">
              <span class="p-difference__cardIcon" aria-hidden="true"></span>
              <p class="p-difference__cardText">接客品質を重視</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-customers">
    <div class="l-inner">
      <div class="p-customers__content">
        <div class="p-customers__head">
          <p class="p-customers__eyebrow">Customers</p>
          <h2 class="p-customers__title">どんなお客様をご案内するのか</h2>
        </div>

        <p class="p-customers__text">
          Zでは、海外からの観光客やビジネス利用の方を中心にご案内しています。 インバウンド需要の高まりとともに、移動そのものに価値を求めるお客様が増えています。 あなたの接客や立ち居振る舞いが、そのまま「日本の印象」になる仕事です。
        </p>

        <div class="p-customers__cards">
          <div class="p-customers__card">
            <span class="p-customers__icon p-customers__icon--tourist" aria-hidden="true"></span>
            <p class="p-customers__cardText">海外からの観光客</p>
          </div>
          <div class="p-customers__card">
            <span class="p-customers__icon p-customers__icon--business" aria-hidden="true"></span>
            <p class="p-customers__cardText">ビジネス利用の方</p>
          </div>
          <div class="p-customers__card">
            <span class="p-customers__icon p-customers__icon--airport" aria-hidden="true"></span>
            <p class="p-customers__cardText">空港をご利用のお客様</p>
          </div>
          <div class="p-customers__card">
            <span class="p-customers__icon p-customers__icon--hotel" aria-hidden="true"></span>
            <p class="p-customers__cardText">ホテルをご利用のお客様</p>
          </div>
        </div>
      </div>
    </div>
  </section>






  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>