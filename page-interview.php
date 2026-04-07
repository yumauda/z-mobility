<?php
$interview_items = [
  [
    'number' => 'No.01',
    'title' => "「子育て世代におすすめ」\n元・ロケドライバー",
    'description' => "朝4時に家を出て、帰宅は深夜。\n「子どもの寝顔しか見られない生活」を続けながら、仕事は好きだった。\n元ロケ車ドライバー・森本さん（35歳）が、子育てをきっかけに働き方を変え、Zのハイヤードライバーへ転職。\n時間の余白が戻り、心の余裕が生まれ、家族との日常が少しずつ取り戻されていく。\nこの動画は、“嫌になったから辞めた”じゃない転職のリアルを、淡々と、でも正直に語ってくれた記録です。",
    'youtube_url' => 'https://www.youtube.com/embed/hAYlnhlqoaU?si=DZRKWvQbaca85unn',
  ],
  [
    'number' => 'No.02',
    'title' => "元・海上自衛隊\n17年勤務、今は自分らしく働けています",
    'description' => "海上自衛隊で約17年。教育隊の分隊長として責任ある役割も経験してきた上野さん。\n当時の時間を否定せず、むしろ「組織の中で学ぶ経験は人生に活きる」と話します。\nそれでも、ふと立ち止まった日があった。\n「“上野智子として”何かできていたのか」。\nこの動画は、逃げではなく“次の挑戦”として選んだ転職の記録です。",
    'youtube_url' => 'https://www.youtube.com/embed/-ZLUfPmFvVY?si=d1Jd1Ph_fpSJA6-3',
  ],
  [
    'number' => 'No.03',
    'title' => "25歳からハイヤー業界に\n飛び込んだ、元・電気店店員。",
    'description' => "「一日は正直きついです。でも、前とはきつさの種類が違うんですよね。」\nそう言い切れるのは、前職の“全体的なしんどさ”を知っているから。家電量販店の接客・クレーム対応を経験した岩田さんが、未経験でハイヤードライバーへ。\n最初は売上を追って走った時期もあった。でも長くは続かなかった。\n体調と安全を優先し、“続けられるライン”を見つけていく。\n若手ならではのリアルが詰まった回です。",
    'youtube_url' => 'https://www.youtube.com/embed/sSmxEBzk4fA?si=AW7M8ACC-DQ6bMTD',
  ],
  [
    'number' => 'No.04',
    'title' => "5年目、\nハイヤードライバー\n佐野さん",
    'description' => "佐野さんが働き方を見直した理由は、収入でもキャリアでもありません。\nきっかけは、家族との時間。\n忙しい日々の中で、ふと立ち止まった瞬間に気づいたことがあった。\n「もっと一緒に過ごせたんじゃないか」。\nこの動画は、“今を大切にする”という価値観が、働き方を変えていく記録です。",
    'youtube_url' => 'https://www.youtube.com/embed/2W8fZGOsVmw?si=joANPQByrtxqD3Rb',
  ],
  [
    'number' => 'No.05',
    'title' => "広報目線からドライバーに聞く\n「運転技術編」「勤務形態編」",
    'description' => "モデル活動に加え、ボディメイク大会でも結果を残してきたディヤナさん。\n現在はZの広報として、現場のベテランドライバーにインタビューを重ねています。\nただ本人は笑いながら言います。\n「なぜここにいるのか分からないです。…ご縁で、ご縁で、ご縁です（笑）」\nこの動画は、ドライバーではなく“広報”が主役。\nでも実は、現場のリアルがいちばん分かる回かもしれません。",
    'youtube_url' => 'https://www.youtube.com/embed/6sWCetwrhJI?si=9GQi3_ifSGUdWSU0',
  ],
];

$render_interview_text = static function ($text) {
  return nl2br(esc_html(str_replace(["\r\n", "\r"], "\n", (string) $text)));
};
?>
<?php get_header(); ?>
<main>
  <?php
  get_template_part('includes/page-mv', null, [
    'title_ja' => 'インタビュー動画',
    'title_en_lines' => ['Interview', 'Movie'],
    'pan_current' => 'インタビュー動画',
  ]);
  ?>

  <section class="p-interview">
    <div class="p-interview__content">
      <div class="l-inner">
        <div class="p-interview__items">
          <?php foreach ($interview_items as $item) : ?>
            <article class="p-interview__item">
              <figure class="p-interview__media">
                <iframe
                  class="p-interview__embed"
                  src="<?php echo esc_url($item['youtube_url']); ?>"
                  title="<?php echo esc_attr(str_replace("\n", ' ', $item['title'])); ?>"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen></iframe>
              </figure>

              <div class="p-interview__body">
                <?php
                $number_value = preg_replace('/^No\./', '', (string) $item['number']);
                ?>
                <p class="p-interview__number">
                  <span class="p-interview__numberLabel">No.</span>
                  <span class="p-interview__numberValue"><?php echo esc_html($number_value); ?></span>
                </p>
                <div class="p-interview__texts">
                  <h2 class="p-interview__title"><?php echo $render_interview_text($item['title']); ?></h2>
                  <p class="p-interview__description"><?php echo $render_interview_text($item['description']); ?></p>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer(); ?>
