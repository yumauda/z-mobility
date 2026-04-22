<?php get_header(); ?>
<main>

  <?php
  get_template_part('includes/page-mv', null, [
    'title_ja' => 'エントリー',
    'title_en_lines' => ['Entry'],
    'pan_current' => 'エントリー',
  ]);
  ?>

  <div class="p-entry">
    <div class="l-inner">
      <div class="p-entry__content">
        <div class="p-entry__lead">
       
          <p class="p-entry__text">
            下記フォームに必要事項をご入力のうえ、ご応募ください。<br class="u-desktop">
            内容を確認後、担当者より順次ご連絡いたします。
          </p>
        </div>

        <div class="p-entry__form">
          <script src="https://sdk.form.run/js/v2/embed.js"></script>
          <div
            class="formrun-embed"
            data-formrun-form="@z-mobility"
            data-formrun-redirect="true">
          </div>
        </div>

        <p class="p-entry__note">
          フォームが表示されない場合は、
          <a class="p-entry__noteLink" href="https://form.run/embed/@z-mobility?embed=direct" target="_blank" rel="noopener noreferrer">こちら</a>
          からご応募ください。
        </p>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
