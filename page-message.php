<?php get_header(); ?>
<main>

  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => '代表メッセージ',
    'title_en_lines' => ['Message', 'from the President'],
    'pan_current' => '代表メッセージ',
  ]);
  ?>

  <section class="p-message">
    <div class="l-inner">
      <div class="p-message__content">
        <div class="p-message__body">
          <h2 class="p-message__title">
            これまでの常識を越え、<br>
            ハイヤーをもっと身近な存在に。
          </h2>
          <span class="p-message__bar" aria-hidden="true"></span>

          <div class="p-message__texts">
            <p class="p-message__text">
              ロイヤルリムジングループには、<br>
              以前から「ハイヤーを通じて新しい移動の価値をつくりたい」という想いがありました。
            </p>
            <p class="p-message__text">
              2002年、業界が大きく変化した自由競争の時代に私たちは挑戦を始め、<br>
              その後、リーマンショックやコロナ禍という厳しい環境の中でも、<br>
              移動サービスの可能性を信じ続けてきました。
            </p>
            <p class="p-message__text">
              そして2021年。<br>
              業界の“最後の砦”として、新しい時代のハイヤーサービスを創るために<br>
              誕生したのが株式会社Zです。<br>
              社名の「Z」には、これまでの常識を越え、<br>
              ハイヤーをもっと身近な存在にしたいという想いを込めています。<br>
              特別な人だけのものではなく、誰もが自然に利用できる移動体験へ。<br>
              それが私たちのビジョンです。
            </p>
            <p class="p-message__text">
              現在、私たちはUberプレミアムと連携しながら、<br>
              急速に回復するインバウンド需要や多様化する移動ニーズに応えています。<br>
              グループとして長年培ってきた実績と、ベンチャー企業としてのスピード。<br>
              この両輪があるからこそ、変化の激しい市場でも挑戦を続けることができています。<br>
              今後は車両数の拡大だけでなく、サービスの質をさらに高め、<br>
              より幅広いお客さまに選ばれるハイヤーを目指していきます。<br>
              同時に、私たちが何より大切にしているのは、ドライバーの働き方です。<br>
              アプリで完結する効率的な運行、言語や決済の壁を越えたサービス、<br>
              そして無理なく長く続けられる環境。<br>
              ドライバーが安心して働き、自分の時間や人生を大切にできること。<br>
              それこそが、これからの移動サービスの本質だと考えています。
            </p>
            <p class="p-message__text">
              私たちの目標は、単にハイヤー事業を拡大することではありません。<br>
              移動を通じて、人の人生を少し豊かに、少し楽しくすること。<br>
              ドライバーにとっても、お客さまにとっても、「豊かで楽しい生活。」につながるサービスを、<br>
              これからも創り続けてまいります。
            </p>
          </div>
        </div>

        <div class="p-message__aside">
          <figure class="p-message__media">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/message/message-president.webp" type="image/webp">
              <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/message/message-president.png" alt="株式会社Z　代表取締役 鈴木 嘉規" width="360" height="480">
            </picture>
          </figure>

          <div class="p-message__sign">
            <p class="p-message__role">株式会社Z　代表取締役</p>
            <p class="p-message__name">鈴木 嘉規</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

  

  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>