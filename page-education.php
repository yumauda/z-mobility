<?php get_header(); ?>
<main>

  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => '二種免許支援・教育体制',
    'title_en_lines' => ['Job Description'],
    'pan_current' => '二種免許支援・教育体制',
  ]);
  ?>

  <section class="p-description">
    <div class="l-inner">
      <div class="p-description__content">
        <div class="p-description__section">
          <div class="p-description__head">
            <h2 class="p-description__title p-description__title--small">未経験でも、<br>プロになれる研修がある。</h2>
            <p class="p-description__text p-description__text--small">
            専任コーチと経験豊富な講師陣による約2ヶ月の研修プログラムで、<br>
            未経験からプロのタクシードライバーを目指せます。
            </p>
          </div>

          <figure class="p-description__image p-description__image--80">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/education/education-block-01.webp" alt="配車アプリ予約専門のイメージ" width="1440" height="500">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="p-program">
    <div class="l-inner">
      <div class="p-program__content">
        <div class="p-program__head">
          <p class="p-program__eyebrow">About the Training Program</p>
          <h2 class="p-program__title">約1か月の充実した<br>研修プログラムについて</h2>
        </div>

        <p class="p-program__lead">
          入社後は二種免許取得のための教習所期間を除き、約1か月間の研修期間を設け業界知識から接客マナー、安全運転、実務に必要なシステム操作まで段階的に学びます。座学だけでなく、実践を交えた研修を行うことで、未経験の方でも自信を持って現場デビューできる内容となっています。
        </p>

        <div class="p-program__cards" aria-label="研修プログラム">
          <section class="p-program__card" aria-label="01 教習所（二種免許取得のため）">
            <div class="p-program__cardRow">
              <div class="p-program__cardMeta">
                <p class="p-program__cardNo">01</p>
                <p class="p-program__cardWhen">ドライバー<br>デビュー後</p>
              </div>
              <span class="p-program__cardDivider" aria-hidden="true"></span>
              <p class="p-program__cardTitle">教習所(二種免許取得のため)</p>
              <p class="p-program__cardText">
                入社後は二種免許取得のため、およそ５日間の教習所(合宿もしくは通い)を受講します。その後お住まいの都道府県免許センターにて筆記試験の受験、合格で二種免許が取得できます。
              </p>
            </div>
          </section>

          <section class="p-program__card" aria-label="02 オリエンテーション">
            <div class="p-program__cardRow">
              <div class="p-program__cardMeta">
                <p class="p-program__cardNo">02</p>
                <p class="p-program__cardWhen">研修初日</p>
              </div>
              <span class="p-program__cardDivider" aria-hidden="true"></span>
              <p class="p-program__cardTitle">オリエンテーション</p>
              <p class="p-program__cardText">
                研修初日はオリエンテーションからスタートします。研修を行う施設の案内や、今後の研修スケジュール・目的を共有し、業界ルールやコンプライアンスについて理解を深めます。また、ドアサービスの基本や接客時に使用するフレーズの練習も行い、プロとしての基礎を身につけます。
              </p>
            </div>
          </section>

          <section class="p-program__card" aria-label="03 基礎研修">
            <div class="p-program__cardRow">
              <div class="p-program__cardMeta">
                <p class="p-program__cardNo">03</p>
                <p class="p-program__cardWhen">2～6日目</p>
              </div>
              <span class="p-program__cardDivider" aria-hidden="true"></span>
              <p class="p-program__cardTitle">基礎研修</p>
              <p class="p-program__cardText">
                安全運転研修では、事故防止のための基本技術だけでなく、危険予知トレーニング（KYT）を通じてリスクを先読みする力を養います。また、同乗者が安心・快適に過ごせるよう、急加速・急減速を抑えたスムーズな運転技術や、プレミアムサービスに求められる走行品質についても指導します。<br>
                あわせて、外部講師による接遇研修、Uberシステムの操作解説、実車を用いた運転練習を行い、安全性とサービス品質の両立を学びます。
              </p>
            </div>
          </section>

          <section class="p-program__card" aria-label="04 実務理解研修">
            <div class="p-program__cardRow">
              <div class="p-program__cardMeta">
                <p class="p-program__cardNo">04</p>
                <p class="p-program__cardWhen">7～11日目</p>
              </div>
              <span class="p-program__cardDivider" aria-hidden="true"></span>
              <p class="p-program__cardTitle">実務理解研修</p>
              <p class="p-program__cardText">
                羽田空港や都内主要ホテルの車寄せについて、ルールや動線を具体的に解説します。また、首都高速道路の走行ポイントや注意点についても学び、実務を想定した理解を深めていきます。
              </p>
            </div>
          </section>

          <section class="p-program__card" aria-label="05 応用研修・模擬実車">
            <div class="p-program__cardRow">
              <div class="p-program__cardMeta">
                <p class="p-program__cardNo">05</p>
                <p class="p-program__cardWhen">以降</p>
              </div>
              <span class="p-program__cardDivider" aria-hidden="true"></span>
              <p class="p-program__cardTitle">応用研修・模擬実車</p>
              <p class="p-program__cardText">
                これまで学んだ内容を踏まえ、より実践的な応用研修を実施します。模擬実車を通して、実際の業務を想定した判断力や対応力を身につけ、安心して現場デビューできる状態を目指します。
              </p>
            </div>
          </section>

          <section class="p-program__card" aria-label="06 バディ制度">
            <div class="p-program__cardRow">
              <div class="p-program__cardMeta">
                <p class="p-program__cardNo">06</p>
                <p class="p-program__cardWhen">ドライバーデビュー後</p>
              </div>
              <span class="p-program__cardDivider" aria-hidden="true"></span>
              <p class="p-program__cardTitle">バディ制度</p>
              <p class="p-program__cardText">
                先輩とマンツーマンでバディを組みます。乗務は別々となりますが、勤務シフトを揃え随時相談をできるようにします。特定の先輩とマンツーマン教育を行うことで「質問しにくい！」を解消し、不安なく乗務していただきます。
              </p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <section class="p-trainers">
    <div class="l-inner">
      <div class="p-trainers__content">
        <div class="p-trainers__head">
          <p class="p-trainers__eyebrow">Trainers and Instructors</p>
          <h2 class="p-trainers__title">教育トレーナーと経験豊富な講師陣について</h2>
        </div>

        <div class="p-trainers__row">
          <div class="p-trainers__body">
            <p class="p-trainers__text">
              研修は、現場経験と指導実績を兼ね備えた教育トレーナーが担当します。日々現場を知る立場だからこそ、マニュアルだけでは伝えきれない実践的なノウハウや判断力を丁寧に指導します。また、研修中は一人ひとりの理解度や不安に寄り添いながら進めるため、質問や相談もしやすい環境です。安心して成長できる体制を整えています。
            </p>

            <div class="p-trainers__cards" aria-label="講師・トレーナー">
              <section class="p-trainers__card" aria-label="常勤専任トレーナー">
                <h3 class="p-trainers__cardTitle">常勤専任トレーナー</h3>
                <span class="p-trainers__cardDivider" aria-hidden="true"></span>
                <ul class="p-trainers__list">
                  <li class="p-trainers__listItem">タクシードライバー経験者</li>
                  <li class="p-trainers__listItem">Uberプレミアムドライバー経験者</li>
                  <li class="p-trainers__listItem">安全運転指導員</li>
                </ul>
              </section>

              <section class="p-trainers__card" aria-label="非常勤講師">
                <h3 class="p-trainers__cardTitle">非常勤講師</h3>
                <span class="p-trainers__cardDivider" aria-hidden="true"></span>
                <ul class="p-trainers__list">
                  <li class="p-trainers__listItem">元客室乗務員</li>
                </ul>
              </section>
            </div>
          </div>

          <figure class="p-trainers__image">
            <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/education/education-trainers.webp" alt="教育トレーナーのイメージ" width="4096" height="2731">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="p-salary">
    <div class="l-inner">
      <div class="p-salary__content">
        <div class="p-salary__head">
          <p class="p-salary__eyebrow">Salary</p>
          <h2 class="p-salary__title">二種免許・研修期間中の給与について</h2>
        </div>

        <div class="p-salary__row">
          <p class="p-salary__text">
            業務に必要な二種免許は、会社のサポートのもと取得できるため、事前に資格をお持ちでなくても問題ありません。また、研修期間中も給与は支給されるため、収入面の心配をせず研修に集中できます。新しい挑戦に不安はつきものですが、金銭面・環境面の両方からしっかり支える制度を整えています。
          </p>

          <section class="p-salary__card" aria-label="給与・制度">
            <h3 class="p-salary__cardTitle">事業許認可</h3>
            <p class="p-salary__cardText">
              正社員雇用<br>
              二種免許取得費用(教習所、筆記試験1回)※社内規定あり<br>
              日給14,000円(二種免許保有者／入社祝い金制度選択)<br>
              日給16,600円(二種免許非保有者／給与保証制度選択)
            </p>
          </section>
        </div>
      </div>
    </div>
  </section>
  





  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>