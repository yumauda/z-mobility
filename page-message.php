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
            すべての人を、<br>
            豊かで楽しく…
          </h2>
          <span class="p-message__bar" aria-hidden="true"></span>

          <div class="p-message__texts">
            <p class="p-message__text">
              はじめまして、代表の鈴木です。<br>
              「なぜ働いているのか？」と時々自問自答することはありませんか？私は、食べるために仕方なく働くなど、後ろ向きの理由で仕事に取り組むより、同じ時間をなにか目標を持って前向きに仕事に向き合ってほしいと想っています。私が想う目標の見つけ方は、ご自身が想う豊で楽しい人生の目標を見つけることです。
            </p>
            <p class="p-message__text">
              この仕事は一般的な仕事に比べて大変ですが、一方で一般的な仕事に比べて高い収入を得ることもできます。「豊かさ」を収入で表現するならば、しっかり稼いで何をしたいのかを決めることです。例えば、旅行に行きたい！車を買いたい！子供のために使いたい！家を買いたい！ローン払っておしまいではなくもっと豊かな生活をしたい！しっかり貯めて人より良い老後を迎えたい！など、少し欲張りなぐらいの目標でいいと想います。
            </p>
            <p class="p-message__text">
              また「楽しく」ですが、日々30回程お客様との新しい出会いがあります。特にインバウンドのお客様は、「今日何食べる?!」「明日どこ行く!?」などお話しされており、それを聞いているだけでも楽しいですし、日本人のお客様は、普段会うことさえもない方々との会話もあり、日々新しい気付きがあり楽しいものです。更にプライベートでは、月12回の勤務しかないので、趣味や家族と過ごす時間なども増え、自分の楽しいにも向き合えるなど、ライフワークバランスの良い仕事だと想います。皆さんには、そんなご自身が想う豊で楽しい人生の目標を見つけ、仕事とプライベートにメリハリを付け、長く活躍して欲しいと想っています。
            </p>
            <p class="p-message__text">
              ただし、自分が豊かで楽しくなる為には、まずは「お客様を豊かで楽しくする」ことが必要です。仕事としっかり向き合い、安全・安心・満足なサービス提供をし、「また乗りたい」と想わせることがリピーターを増やし、ご自身の収入につなげることができるのだと確信をしています。
            </p>
            <p class="p-message__text">
              また、ご応募いただくUberプレミアム事業は、昨今の旺盛なインバウンド需要の伸びに比例して、大きく成長をしています。その一番の要因は、Uberは全世界共通の１つのアプリだけで利用できることにあります。つまりは、東京に着いた時から、いつも安心して利用している配車アプリで、いつもと同じように安心して日本のハイヤーを利用できることにあります。これは、インバウンドの皆さまにとっては、まさに豊かで楽しい旅行の一助になっているはずです。2025年のインバウンド数は過去最高の約4200万人を記録しましたが、政府目標は2030年までに6000万人を目標としており、弊社も今後更なる事業の成長が目指し、積極的な募集をしているところです。
            </p>
            <p class="p-message__text">
              この様な、皆さんもお客様もすべての人をwin-winにできる仕事は、他にはなかなかありません。是非みなさんも一緒に、豊か楽しい人生を目指しませんか！
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
            <p class="p-message__role">ロイヤルリムジングループ</p>
            <p class="p-message__role">株式会社Ｚ</p>
            <p class="p-message__role">代表取締役</p>
            <p class="p-message__name">鈴木 嘉規</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>