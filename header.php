<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php
    $z_site_name = get_bloginfo('name');
    $z_title = function_exists('wp_get_document_title') ? wp_get_document_title() : $z_site_name;
    $z_default_desc = 'Z-MOBILITY（株式会社Z）の採用・コーポレートサイトです。仕事について、会社情報、代表メッセージなどをご案内します。';
    $z_desc = $z_default_desc;
    if (is_singular()) {
        $z_desc_candidate = get_the_excerpt();
        if (is_string($z_desc_candidate) && $z_desc_candidate !== '') {
            $z_desc = $z_desc_candidate;
        }
    } else {
        $z_tagline = get_bloginfo('description');
        if (is_string($z_tagline) && $z_tagline !== '') {
            $z_desc = $z_tagline;
        }
    }
    $z_desc = preg_replace('/\s+/', ' ', trim(wp_strip_all_tags($z_desc)));
    $z_ogp = esc_url(get_template_directory_uri() . '/images/common/ogp.png');
    $z_url = is_singular() ? get_permalink() : esc_url(home_url('/'));
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

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri() . '/images/common/favicon-32.png'); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri() . '/images/common/favicon-16.png'); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/images/common/apple-touch-icon.png'); ?>" />
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Special+Gothic+Expanded+One&display=swap" rel="stylesheet">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
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
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-header__link">entry</a>
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
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/description')); ?>">仕事内容</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/hire')); ?>">車両紹介</a>
                                                        </li>
                                                        <li class="p-drawer-content__subItem">
                                                            <a class="p-drawer-content__sublink" href="<?php echo esc_url(home_url('/work/education')); ?>">二種免許支援教育体制</a>
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
                                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer-content__action">
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