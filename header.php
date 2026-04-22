<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PCPQDB6N');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TS8QQ4WV');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KMSRV77D');
    </script>
    <!-- End Google Tag Manager -->
    <?php
    global $wp;
    $z_site_name = get_bloginfo('name');
    $z_meta = function_exists('zm_get_meta_data') ? zm_get_meta_data() : [
        'title' => $z_site_name,
        'description' => get_bloginfo('description'),
    ];
    $z_title = isset($z_meta['title']) ? (string) $z_meta['title'] : $z_site_name;
    $z_desc = isset($z_meta['description']) ? (string) $z_meta['description'] : '';
    $z_ogp = esc_url(get_template_directory_uri() . '/images/common/ogp.webp');
    $z_url = is_singular() ? get_permalink() : home_url(isset($wp->request) && $wp->request !== '' ? trailingslashit($wp->request) : '/');
    $z_og_type = (is_front_page() || is_home()) ? 'website' : 'article';
    ?>
    <title><?php echo esc_html($z_title); ?></title>
    <meta name="description" content="<?php echo esc_attr($z_desc); ?>" />

    <meta property="og:locale" content="ja_JP" />
    <meta property="og:site_name" content="<?php echo esc_attr($z_site_name); ?>" />
    <meta property="og:title" content="<?php echo esc_attr($z_title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($z_desc); ?>" />
    <meta property="og:type" content="<?php echo esc_attr($z_og_type); ?>" />
    <meta property="og:url" content="<?php echo esc_url($z_url); ?>" />
    <meta property="og:image" content="<?php echo esc_url($z_ogp); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo esc_url($z_ogp); ?>" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/images/common/apple-touch-icon.png'); ?>" />
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Special+Gothic+Expanded+One&display=swap" rel="stylesheet">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '950461666603953');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=950461666603953&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-560299561"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-560299561');
</script>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCPQDB6N"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS8QQ4WV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMSRV77D"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="p-header<?php echo is_front_page() ? ' js-top-header' : ''; ?>">
        <div class="p-header__inner">
            <div class="p-header__content">
                <div class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__home">
                        <img decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/header_logo.png" alt="z-mobility" width="83" height="77">
                    </a>
                </div>
                <nav class="p-header__nav">
                    <ul class="p-header__lists">
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/entry')); ?>" class="p-header__link">entry</a>
                        </li>
                        <li class="p-header__list">
                            <button class="p-header__drawer p-drawer-icon">
                                <span class="p-drawer-icon__bars">
                                    <span class="p-drawer-icon__bar1"></span>
                                    <span class="p-drawer-icon__bar3"></span>
                                </span>
                            </button>
                            <div class="p-header__drawer-content p-drawer-content">
                                <div class="p-drawer-content__items">
                                    <div class="p-drawer-content__layout">
                                        <div class="p-drawer-content__lists">
                                            <div class="p-drawer-content__column">
                                                <div class="p-drawer-content__list">
                                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">
                                                        <span class="p-drawer-content__link-en">Top</span>
                                                        <span class="p-drawer-content__link-ja">トップ</span>
                                                    </a>
                                                </div>
                                                <div class="p-drawer-content__list">
                                                    <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-drawer-content__link">
                                                        <span class="p-drawer-content__link-en">News</span>
                                                        <span class="p-drawer-content__link-ja">お知らせ</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-drawer-content__column">
                                                <div class="p-drawer-content__list p-drawer-content__list--has-sub is-open" data-default-open="true">
                                                    <div class="p-drawer-content__heading">
                                                        <a href="<?php echo esc_url(home_url('/work')); ?>" class="p-drawer-content__link">
                                                            <span class="p-drawer-content__link-en">Work</span>
                                                            <span class="p-drawer-content__link-ja">仕事について</span>
                                                        </a>
                                                        <button type="button" class="p-drawer-content__toggle" aria-expanded="true" aria-controls="drawer-work-sub">
                                                            <span class="p-drawer-content__toggle-line"></span>
                                                            <span class="p-drawer-content__toggle-line p-drawer-content__toggle-line--vertical"></span>
                                                        </button>
                                                    </div>
                                                    <ul class="p-drawer-content__sub" id="drawer-work-sub">
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/description')); ?>">Z MOBILITYの仕事について</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/hire')); ?>">Z MOBILITY のハイヤーとは</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/education')); ?>">二種免許支援・教育体制</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/numbers')); ?>">数字で見るZ</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/faq')); ?>">よくある質問</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-drawer-content__column">
                                                <div class="p-drawer-content__list">
                                                    <a href="<?php echo esc_url(home_url('/column')); ?>" class="p-drawer-content__link">
                                                        <span class="p-drawer-content__link-en">Column</span>
                                                        <span class="p-drawer-content__link-ja">コラム</span>
                                                    </a>
                                                </div>
                                                <div class="p-drawer-content__list">
                                                    <a href="<?php echo esc_url(home_url('/interview/')); ?>" class="p-drawer-content__link">
                                                        <span class="p-drawer-content__link-en">Interview Movie</span>
                                                        <span class="p-drawer-content__link-ja">インタビュー動画</span>
                                                    </a>
                                                </div>
                                                <div class="p-drawer-content__list p-drawer-content__list--has-sub">
                                                    <div class="p-drawer-content__heading">
                                                        <a href="<?php echo esc_url(home_url('/company')); ?>" class="p-drawer-content__link">
                                                            <span class="p-drawer-content__link-en">Company</span>
                                                            <span class="p-drawer-content__link-ja">会社情報</span>
                                                        </a>
                                                        <button type="button" class="p-drawer-content__toggle" aria-expanded="false" aria-controls="drawer-company-sub">
                                                            <span class="p-drawer-content__toggle-line"></span>
                                                            <span class="p-drawer-content__toggle-line p-drawer-content__toggle-line--vertical"></span>
                                                        </button>
                                                    </div>
                                                    <ul class="p-drawer-content__sub" id="drawer-company-sub">
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/company/message')); ?>">代表メッセージ</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/company/information')); ?>">会社概要</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-drawer-content__actions">
                                            <a href="<?php echo esc_url(home_url('/entry')); ?>" class="p-drawer-content__action">
                                                <span class="p-drawer-content__action-en">Entry</span>
                                                <span class="p-drawer-content__action-ja">エントリー</span>
                                            </a>
                                            <a href="<?php echo esc_url(home_url('/guidelines')); ?>" class="p-drawer-content__action">
                                                <span class="p-drawer-content__action-en">Guidelines</span>
                                                <span class="p-drawer-content__action-ja">募集要項</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-header__recruit">
                        <a href="<?php echo esc_url(home_url('/guidelines')); ?>" class="p-header__recruit-link">募集要項</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>