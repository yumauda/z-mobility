<?php get_header(); ?>
<main>

  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => 'Z MOBILITYの仕事について',
    'title_en_lines' => ['Job Description'],
    'pan_current' => 'Z MOBILITYの仕事について',
  ]);
  ?>

  <section class="p-description">
    <div class="l-inner">
      <div class="p-description__content">
        <section class="p-description__section">
          <div class="p-description__head">
            <h2 class="p-description__title">流し営業なし！<br>配車アプリ予約専門</h2>
            <p class="p-description__text">
              予約が入ってから動く、効率重視のスタイル。<br>
              無駄な待機や流し走行がなく、安定した稼働が実現できます。
            </p>
          </div>

          <figure class="p-description__image">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/description/description-block-01.webp" alt="配車アプリ予約専門のイメージ" width="1440" height="500">
          </figure>
        </section>

        <section class="p-description__section p-description__section--hospitality">
          <div class="p-description__intro">
            <p class="p-description__eyebrow">The highest level of hospitality</p>
            <h2 class="p-description__headline">最高級の車で最上級のおもてなしのために</h2>
          </div>

          <p class="p-description__bodyText">
            私たちが選んだのは、国内最高峰のミニバン「トヨタ アルファード」と、エグゼクティブの信頼を長年集める「トヨタ クラウン」。<br>
            車内の静粛性・乗り心地・空間の余裕。すべてにおいて妥協のない車両で、お客様をお迎えします。移動の時間そのものを、特別なひとときへ。<br>
            それが私たちのおもてなしです。
          </p>

          <figure class="p-description__collage">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/description/description-block-02.png" alt="最高級の車両とおもてなしのイメージ" width="2560" height="1066">
          </figure>
        </section>
      </div>
    </div>
  </section>
  <section class="p-uber">
    <div class="l-inner">
      <div class="p-uber__content">
        <div class="p-uber__head">
          <p class="p-uber__eyebrow">Uber</p>
          <h2 class="p-uber__title">インバウンド需要に最適なウーバーアプリ</h2>
        </div>

        <div class="p-uber__main">
          <p class="p-uber__lead">
            世界15,000以上の都市で使われているUberは、海外のお客様にとって最も身近な配車サービス。日本語変換機能とクレジット決済対応で、言葉の壁や現金のやり取りも不要です。実際にUber Premiumをご利用のお客様の8割〜8割強が海外からのゲストと、インバウンド需要に直結したサービスです。
          </p>

          <figure class="p-uber__logos" aria-hidden="true">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/description/uber-logos.svg" alt="" width="335" height="96">
          </figure>
        </div>

        <ul class="p-uber__cards">
          <li class="p-uber__card">
            <div class="p-uber__cardInner">
              <span class="p-uber__cardIcon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/description/uber-point-worldwide.svg" alt="" width="96" height="96">
              </span>
              <p class="p-uber__cardText">世界15,000以上の都市で利用</p>
            </div>
          </li>
          <li class="p-uber__card">
            <div class="p-uber__cardInner">
              <span class="p-uber__cardIcon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/description/uber-point-translate.svg" alt="" width="96" height="96">
              </span>
              <p class="p-uber__cardText">日本語変換機能付き</p>
            </div>
          </li>
          <li class="p-uber__card">
            <div class="p-uber__cardInner">
              <span class="p-uber__cardIcon" aria-hidden="true">
                <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/description/uber-point-payment.svg" alt="" width="96" height="96">
              </span>
              <p class="p-uber__cardText">クレジット決済で降車までスムーズ</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-flow">
    <div class="l-inner">
      <div class="p-flow__content">
        <div class="p-flow__head">
          <p class="p-flow__eyebrow">Flow</p>
          <h2 class="p-flow__title">予約から降車までスムーズな手順</h2>
        </div>

        <p class="p-flow__lead">
          お客様がUberアプリで配車を依頼すると、最も近いドライバーへ通知が届きます。ドライバーはナビを使って迷わずお迎えに向かい、乗車後はアプリが自動で行き先を表示。降車時も料金はアプリで自動計算されるため、現金のやり取りは一切不要です。会社貸与のiPad<br class="u-mobile">
          miniで、予約から降車まで全工程をアプリ上でスムーズに完結できます。
        </p>

        <div class="p-flow__steps" aria-label="配車から降車までの流れ">
          <div class="p-flow__step">
            <p class="p-flow__stepNo">01</p>
            <p class="p-flow__stepRole">お客様</p>
            <p class="p-flow__stepText">概算料金を確認しUberに配車依頼</p>
          </div>

          <div class="p-flow__step">
            <p class="p-flow__stepNo">02</p>
            <p class="p-flow__stepRole">ドライバー</p>
            <p class="p-flow__stepText">車載アプリに<br>配車依頼</p>
          </div>

          <div class="p-flow__step">
            <p class="p-flow__stepNo">03</p>
            <p class="p-flow__stepRole">ドライバー</p>
            <p class="p-flow__stepText">ナビを参考に<br>お客様をお迎え</p>
          </div>

          <div class="p-flow__step">
            <p class="p-flow__stepNo">04</p>
            <p class="p-flow__stepRole">ドライバー</p>
            <p class="p-flow__stepText">乗車開始操作で<br>行き先表示</p>
          </div>

          <div class="p-flow__step">
            <p class="p-flow__stepNo">05</p>
            <p class="p-flow__stepRole">ドライバー</p>
            <p class="p-flow__stepText">降車完了操作で<br>料金計算</p>
          </div>

          <div class="p-flow__step">
            <p class="p-flow__stepNo">06</p>
            <p class="p-flow__stepRole">お客様</p>
            <p class="p-flow__stepText">ドライバーの評価とチップの設定</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>