<footer class="p-footer">
    <div class="l-inner">
        <div class="p-footer__footer">
            <div class="p-footer__footerTop">
                <div class="p-footer__info">
                    <div class="p-footer__company">
                        <p class="p-footer__companyName">株式会社Ｚ</p>
                        <p class="p-footer__companyText">
                            本社<br>
                            〒104-0061　<br class="u-mobile">東京都中央区銀座8-3-10 <br class="u-mobile">トミタビル4F<br>
                            TEL：050-3733-7504<br>
                            FAX：050-3733-7505
                        </p>
                    </div>

                    <figure class="p-footer__logo">
                        <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/footer-logo.svg" alt="株式会社Z" width="125" height="116">
                    </figure>
                </div>
                <div class="p-footer__right">

                    <nav class="p-footer__nav" aria-label="フッターナビゲーション">
                        <div class="p-footer__navCol">
                            <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/')); ?>">Top</a>
                            <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
                        </div>

                        <div class="p-footer__navCol p-footer__navCol--wide">
                            <div class="p-footer__navGroup">
                                <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/work')); ?>">仕事について</a>
                                <div class="p-footer__navSub">
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/work')); ?>">仕事内容</a>
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/work')); ?>">車両紹介</a>
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/work')); ?>">二種免許支援教育体制</a>
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/work')); ?>">数字で見るZ</a>
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/work')); ?>">よくある質問</a>
                                </div>
                            </div>
                            <a class="p-footer__navLink u-desktop" href="<?php echo esc_url(home_url('/')); ?>">インタビュー動画</a>
                        </div>

                        <div class="p-footer__navCol">
                            <a class="p-footer__navLink u-mobile" href="<?php echo esc_url(home_url('/')); ?>">インタビュー動画</a>
                            <div class="p-footer__navGroup">
                                <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/company')); ?>">会社情報</a>
                                <div class="p-footer__navSub">
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/company/message')); ?>">代表メッセージ</a>
                                    <a class="p-footer__navSublink" href="<?php echo esc_url(home_url('/company/information')); ?>">会社概要</a>
                                </div>
                            </div>
                            <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/work')); ?>">募集要項</a>
                            <a class="p-footer__navLink" href="<?php echo esc_url(home_url('/contact')); ?>">エントリー</a>
                        </div>
                    </nav>
                    <div class="p-footer__footerBottom">
                        <div class="p-footer__legal">
                            <a class="p-footer__legalLink" href="<?php echo esc_url(home_url('/privacy')); ?>">プライバシーポリシー</a>
                            <a class="p-footer__legalLink" href="<?php echo esc_url(home_url('/conditions')); ?>">運送約款</a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <p class="p-footer__copyright">Copyright © 「Z-MOBILITY」オフィシャルサイト. All rights reserved.</p>

    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>