<?php get_header(); ?>
<main>

  <?php
  get_template_part('includes/page-mv-small', null, [
    'title_ja' => '会社概要',
    'title_en_lines' => ['Information'],
    'pan_current' => '会社概要',
  ]);
  ?>

  <section class="p-information">
    <div class="l-inner">
      <div class="p-information__content">
        <section class="p-information__section p-information__section--profile">
          <div class="p-information__head">
            <p class="p-information__head-ja">プロフィール</p>
            <p class="p-information__head-en">Company<br>Profile</p>
          </div>

          <div class="p-information__body">
            <dl class="p-information__dl">
              <div class="p-information__row">
                <dt class="p-information__dt">社名</dt>
                <dd class="p-information__dd">株式会社Ｚ</dd>
              </div>
              <div class="p-information__row">
                <dt class="p-information__dt">代表</dt>
                <dd class="p-information__dd">代表取締役　鈴木 嘉規</dd>
              </div>
              <div class="p-information__row">
                <dt class="p-information__dt">事業許認可</dt>
                <dd class="p-information__dd">
                  国土交通省　関自旅二第3244号　一般乗用旅客自動車運送業<br>
                  その他ハイヤー等225台、タクシー51台　計276台
                </dd>
              </div>

              <div class="p-information__row p-information__row--stack">
                <dt class="p-information__dt">事業許認可</dt>
                <dd class="p-information__dd">
                  <div class="p-information__office">
                    <p class="p-information__office-name">本社</p>
                    <p class="p-information__office-text">
                      〒104-0061　東京都中央区銀座8-3-10 トミタビル4F<br>
                      TEL：050-3733-7504　FAX：050-3733-7505
                    </p>
                  </div>
                  <div class="p-information__office">
                    <p class="p-information__office-name">品川営業所</p>
                    <p class="p-information__office-text">
                      〒140-0001　東京都品川区北品川2-34-3<br>
                      TEL：03-3471-4428　FAX：03-3471-4463
                    </p>
                  </div>
                  <div class="p-information__office">
                    <p class="p-information__office-name">五反田営業所</p>
                    <p class="p-information__office-text">
                      〒141-0031　東京都品川区西五反田7-22-17 TOCビル5F
                    </p>
                  </div>
                </dd>
              </div>

              <div class="p-information__row p-information__row--stack">
                <dt class="p-information__dt">お問い合わせ</dt>
                <dd class="p-information__dd">
                  <div class="p-information__office">
                    <p class="p-information__office-name">Z-MOBILITYコールセンター</p>
                    <p class="p-information__office-text">TEL：050-3733-7446　FAX：050-3733-7447</p>
                  </div>
                  <div class="p-information__office">
                    <p class="p-information__office-name">お忘れ物・運行管理等</p>
                    <p class="p-information__office-text">TEL：050-3733-7504　FAX：050-3733-7505</p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
        </section>

        <section class="p-information__section">
          <div class="p-information__head">
            <p class="p-information__head-ja">アクセス</p>
            <p class="p-information__head-en">Access</p>
          </div>

          <div class="p-information__body">
            <div class="p-information__accessList">
              <div class="p-information__accessItem">
                <figure class="p-information__accessMap" aria-hidden="true">
                  <iframe
                    title="本社 Google Map"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    src="<?php echo esc_url('https://www.google.com/maps?output=embed&q=' . rawurlencode('〒104-0061　東京都中央区銀座8-3-10 トミタビル4F')); ?>"></iframe>
                </figure>

                <div class="p-information__accessCard">
                  <div class="p-information__accessTexts">
                    <p class="p-information__accessOffice">本社</p>
                    <dl class="p-information__accessDl">
                      <div class="p-information__accessRow">
                        <dt class="p-information__accessDt">住所</dt>
                        <dd class="p-information__accessDd">〒104-0061　東京都中央区銀座8-3-10 トミタビル4F</dd>
                      </div>
                      <div class="p-information__accessRow">
                        <dt class="p-information__accessDt">交通アクセス</dt>
                        <dd class="p-information__accessDd">
                          ＪＲ山手線他 / 新橋駅 徒歩３分<br>
                          都営三田線 / 内幸町駅 徒歩６分
                        </dd>
                      </div>
                    </dl>
                  </div>

                  <a class="p-information__mapBtn" href="<?php echo esc_url('https://www.google.com/maps/search/?api=1&query=' . rawurlencode('〒104-0061　東京都中央区銀座8-3-10 トミタビル4F')); ?>" target="_blank" rel="noopener">
                    <span class="p-information__mapBtnText">Google Mapsを見る</span>
                    <span class="p-information__mapBtnIcon" aria-hidden="true">
                      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/pin.svg" alt="" width="24" height="24">
                    </span>
                  </a>
                </div>
              </div>

              <span class="p-information__divider" aria-hidden="true"></span>

              <div class="p-information__accessItem">
                <figure class="p-information__accessMap" aria-hidden="true">
                  <iframe
                    title="品川営業所 Google Map"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    src="<?php echo esc_url('https://www.google.com/maps?output=embed&q=' . rawurlencode('〒140-0001　東京都品川区北品川2-34-3')); ?>"></iframe>
                </figure>

                <div class="p-information__accessCard">
                  <div class="p-information__accessTexts">
                    <p class="p-information__accessOffice">品川営業所</p>
                    <dl class="p-information__accessDl">
                      <div class="p-information__accessRow">
                        <dt class="p-information__accessDt">住所</dt>
                        <dd class="p-information__accessDd">〒140-0001　東京都品川区北品川2-34-3</dd>
                      </div>
                      <div class="p-information__accessRow">
                        <dt class="p-information__accessDt">交通アクセス</dt>
                        <dd class="p-information__accessDd">京浜急行線 / 新馬場駅 徒歩1分</dd>
                      </div>
                    </dl>
                  </div>

                  <a class="p-information__mapBtn" href="<?php echo esc_url('https://www.google.com/maps/search/?api=1&query=' . rawurlencode('〒140-0001　東京都品川区北品川2-34-3')); ?>" target="_blank" rel="noopener">
                    <span class="p-information__mapBtnText">Google Mapsを見る</span>
                    <span class="p-information__mapBtnIcon" aria-hidden="true">
                      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/pin.svg" alt="" width="24" height="24">
                    </span>
                  </a>
                </div>
              </div>

              <span class="p-information__divider" aria-hidden="true"></span>

              <div class="p-information__accessItem">
                <figure class="p-information__accessMap" aria-hidden="true">
                  <iframe
                    title="五反田営業所 Google Map"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    src="<?php echo esc_url('https://www.google.com/maps?output=embed&q=' . rawurlencode('〒141-0031　東京都品川区西五反田7-22-17 TOCビル5F')); ?>"></iframe>
                </figure>

                <div class="p-information__accessCard">
                  <div class="p-information__accessTexts">
                    <p class="p-information__accessOffice">五反田営業所</p>
                    <dl class="p-information__accessDl">
                      <div class="p-information__accessRow">
                        <dt class="p-information__accessDt">住所</dt>
                        <dd class="p-information__accessDd">〒141-0031　東京都品川区西五反田7-22-17 TOCビル5F</dd>
                      </div>
                      <div class="p-information__accessRow">
                        <dt class="p-information__accessDt">交通アクセス</dt>
                        <dd class="p-information__accessDd">
                          東急電鉄池上線 / 大崎広小路駅 徒歩5分<br>
                          東急電鉄目黒線 / 不動前駅 徒歩6分<br>
                          ＪＲ山手線他 / 五反田駅 徒歩8分
                        </dd>
                      </div>
                    </dl>
                  </div>

                  <a class="p-information__mapBtn" href="<?php echo esc_url('https://www.google.com/maps/search/?api=1&query=' . rawurlencode('〒141-0031　東京都品川区西五反田7-22-17 TOCビル5F')); ?>" target="_blank" rel="noopener">
                    <span class="p-information__mapBtnText">Google Mapsを見る</span>
                    <span class="p-information__mapBtnIcon" aria-hidden="true">
                      <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/pin.svg" alt="" width="24" height="24">
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="p-information__section p-information__section--group">
          <div class="p-information__head">
            <p class="p-information__head-ja">アクセス</p>
            <p class="p-information__head-en">Group<br>Companies</p>
            <div class="p-information__groupIntro">
              <p class="p-information__groupTitle">
                ロイヤルリムジングループ<br>
                合計9社500台にて展開中。
              </p>
              <p class="p-information__groupText">
                ロイヤルリムジングループ。<br>
                我々は、国際都市に快適な移動インフラを<br class="u-desktop">提供致します。
              </p>
            </div>
          </div>

          <div class="p-information__body p-information__body--group">


            <div class="p-information__groupList p-information__groupList--group">
              <a class="p-information__groupItem" href="https://royal-limo.co.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">ロイヤルリムジン株式会社</p>
                    <p class="p-information__groupArea">東京都江東区にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>

              <a class="p-information__groupItem" href="https://j-premium.co.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">株式会社ジャパンプレミアム東京</p>
                    <p class="p-information__groupArea">東京都中央区にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>

              <a class="p-information__groupItem" href="https://taxi-megurokotsu.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">目黒自動車交通株式会社</p>
                    <p class="p-information__groupArea">東京都目黒区にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>

              <a class="p-information__groupItem" href="https://taxi-megurokotsu.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">目黒自動車交通葛飾株式会社</p>
                    <p class="p-information__groupArea">東京都葛飾区にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>

              <a class="p-information__groupItem" href="https://ichinisan-taxi.co.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">株式会社一二三交通自動車</p>
                    <p class="p-information__groupArea">東京都江戸川区他にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>

              <a class="p-information__groupItem" href="https://kanto-taxi.co.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">オリエンタルタクシー株式会社</p>
                    <p class="p-information__groupArea">兵庫県神戸市にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>

              <a class="p-information__groupItem" href="https://fujimegumi.co.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">富士恵タクシー株式会社</p>
                    <p class="p-information__groupArea">兵庫県神戸市にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>
              <a class="p-information__groupItem" href="https://fivestar-taxi.com/about.html" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">ファイブスタータクシー株式会社</p>
                    <p class="p-information__groupArea">兵庫県明石市他にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>
              <a class="p-information__groupItem" href="https://asahi-taxi.jp/" target="_blank" rel="noopener">
                <div class="p-information__groupItemInner">
                  <div class="p-information__groupItemTexts">
                    <p class="p-information__groupName">朝日自動車グループ</p>
                    <p class="p-information__groupArea">大阪府大阪市他にて</p>
                  </div>
                  <span class="p-information__groupBtn" aria-hidden="true">
                    <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page/information/group-btn.svg" alt="" width="28" height="28">
                  </span>
                </div>
              </a>


            </div>
          </div>
        </section>
      </div>
    </div>
  </section>





  <?php get_template_part('includes/submit'); ?>

</main>
<?php get_footer() ?>