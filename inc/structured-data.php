<?php

if (!function_exists('zm_sd_normalize_text')) {
  function zm_sd_normalize_text($text)
  {
    if (function_exists('zm_normalize_meta_text')) {
      return zm_normalize_meta_text($text);
    }

    $text = is_string($text) ? $text : '';
    return preg_replace('/\s+/u', ' ', trim(wp_strip_all_tags($text)));
  }
}

if (!function_exists('zm_sd_current_url')) {
  function zm_sd_current_url()
  {
    if (is_singular()) {
      return get_permalink();
    }

    if (is_home()) {
      return home_url('/news/');
    }

    if (is_post_type_archive('column')) {
      return get_post_type_archive_link('column');
    }

    if (is_tax() || is_category() || is_tag()) {
      $queried_object = get_queried_object();
      if (is_object($queried_object) && isset($queried_object->term_id)) {
        return get_term_link($queried_object);
      }
    }

    global $wp;
    $request = isset($wp->request) ? (string) $wp->request : '';
    return home_url($request !== '' ? trailingslashit($request) : '/');
  }
}

if (!function_exists('zm_sd_company_data')) {
  function zm_sd_company_data()
  {
    return [
      'name' => '株式会社Z',
      'alternate_name' => 'Z MOBILITY',
      'description' => 'Z MOBILITY（株式会社Z）の採用・コーポレートサイト。ハイヤードライバー採用、仕事内容、教育体制、FAQ、会社情報、コラムを掲載しています。',
      'url' => home_url('/'),
      'logo' => get_template_directory_uri() . '/images/common/ogp.webp',
      'logo_width' => 1200,
      'logo_height' => 630,
      'telephone' => '03-6263-9958',
      'address' => [
        '@type' => 'PostalAddress',
        'postalCode' => '104-0061',
        'addressCountry' => 'JP',
        'addressRegion' => '東京都',
        'addressLocality' => '中央区',
        'streetAddress' => '銀座8-3-10 トミタビル4F',
      ],
    ];
  }
}

if (!function_exists('zm_sd_get_organization_schema')) {
  function zm_sd_get_organization_schema()
  {
    $company = zm_sd_company_data();

    return [
      '@type' => 'Organization',
      '@id' => trailingslashit($company['url']) . '#organization',
      'name' => $company['name'],
      'alternateName' => $company['alternate_name'],
      'url' => $company['url'],
      'description' => $company['description'],
      'logo' => [
        '@type' => 'ImageObject',
        'url' => $company['logo'],
        'width' => $company['logo_width'],
        'height' => $company['logo_height'],
      ],
      'telephone' => $company['telephone'],
      'address' => $company['address'],
      'contactPoint' => [
        [
          '@type' => 'ContactPoint',
          'contactType' => 'recruiting',
          'telephone' => $company['telephone'],
          'areaServed' => 'JP',
          'availableLanguage' => ['ja'],
        ],
      ],
    ];
  }
}

if (!function_exists('zm_sd_get_website_schema')) {
  function zm_sd_get_website_schema()
  {
    $company = zm_sd_company_data();
    $meta = function_exists('zm_get_meta_data') ? zm_get_meta_data() : [];
    $description = isset($meta['description']) ? zm_sd_normalize_text($meta['description']) : $company['description'];

    return [
      '@type' => 'WebSite',
      '@id' => trailingslashit($company['url']) . '#website',
      'url' => $company['url'],
      'name' => $company['alternate_name'],
      'alternateName' => $company['name'],
      'description' => $description,
      'inLanguage' => 'ja-JP',
      'publisher' => [
        '@id' => trailingslashit($company['url']) . '#organization',
      ],
    ];
  }
}

if (!function_exists('zm_sd_get_breadcrumb_items')) {
  function zm_sd_get_breadcrumb_items()
  {
    $home = [
      'name' => 'トップ',
      'item' => home_url('/'),
    ];

    if (is_front_page()) {
      return [];
    }

    if (is_home()) {
      return [
        $home,
        [
          'name' => 'お知らせ',
          'item' => home_url('/news/'),
        ],
      ];
    }

    if (is_singular('post')) {
      return [
        $home,
        [
          'name' => 'お知らせ',
          'item' => home_url('/news/'),
        ],
        [
          'name' => get_the_title(),
          'item' => get_permalink(),
        ],
      ];
    }

    if (is_category()) {
      return [
        $home,
        [
          'name' => 'お知らせ',
          'item' => home_url('/news/'),
        ],
        [
          'name' => single_cat_title('', false),
          'item' => get_term_link(get_queried_object()),
        ],
      ];
    }

    if (is_post_type_archive('column')) {
      return [
        $home,
        [
          'name' => 'コラム',
          'item' => get_post_type_archive_link('column'),
        ],
      ];
    }

    if (is_tax('allcolumn_category')) {
      $term = get_queried_object();
      return [
        $home,
        [
          'name' => 'コラム',
          'item' => get_post_type_archive_link('column'),
        ],
        [
          'name' => single_term_title('', false),
          'item' => (is_object($term) && isset($term->term_id)) ? get_term_link($term) : zm_sd_current_url(),
        ],
      ];
    }

    if (is_singular('column')) {
      return [
        $home,
        [
          'name' => 'コラム',
          'item' => get_post_type_archive_link('column'),
        ],
        [
          'name' => get_the_title(),
          'item' => get_permalink(),
        ],
      ];
    }

    if (is_page('work')) {
      return [
        $home,
        [
          'name' => '仕事について',
          'item' => home_url('/work/'),
        ],
      ];
    }

    if (is_page(['description', 'hire', 'education', 'numbers', 'faq'])) {
      return [
        $home,
        [
          'name' => '仕事について',
          'item' => home_url('/work/'),
        ],
        [
          'name' => get_the_title(),
          'item' => get_permalink(),
        ],
      ];
    }

    if (is_page('company')) {
      return [
        $home,
        [
          'name' => '会社情報',
          'item' => home_url('/company/'),
        ],
      ];
    }

    if (is_page(['message', 'information'])) {
      return [
        $home,
        [
          'name' => '会社情報',
          'item' => home_url('/company/'),
        ],
        [
          'name' => get_the_title(),
          'item' => get_permalink(),
        ],
      ];
    }

    if (is_page()) {
      return [
        $home,
        [
          'name' => get_the_title(),
          'item' => get_permalink(),
        ],
      ];
    }

    return [
      $home,
      [
        'name' => wp_get_document_title(),
        'item' => zm_sd_current_url(),
      ],
    ];
  }
}

if (!function_exists('zm_sd_get_breadcrumb_schema')) {
  function zm_sd_get_breadcrumb_schema()
  {
    $items = zm_sd_get_breadcrumb_items();
    if (empty($items)) {
      return null;
    }

    $list_items = [];
    foreach ($items as $index => $item) {
      if (empty($item['name']) || empty($item['item'])) {
        continue;
      }

      $list_items[] = [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'name' => $item['name'],
        'item' => $item['item'],
      ];
    }

    if (empty($list_items)) {
      return null;
    }

    return [
      '@type' => 'BreadcrumbList',
      '@id' => zm_sd_current_url() . '#breadcrumb',
      'itemListElement' => $list_items,
    ];
  }
}

if (!function_exists('zm_sd_flatten_faq_items')) {
  function zm_sd_flatten_faq_items($sections)
  {
    $items = [];

    foreach ((array) $sections as $section) {
      foreach ((array) ($section['items'] ?? []) as $item) {
        $question = zm_sd_normalize_text($item['question'] ?? '');
        $answer = zm_sd_normalize_text($item['answer'] ?? '');
        $note = zm_sd_normalize_text($item['note'] ?? '');

        if ($question === '' || $answer === '') {
          continue;
        }

        if ($note !== '') {
          $answer .= ' ' . $note;
        }

        $items[] = [
          'question' => $question,
          'answer' => $answer,
        ];
      }
    }

    return $items;
  }
}

if (!function_exists('zm_sd_get_faq_schema')) {
  function zm_sd_get_faq_schema($items, $id_suffix = '#faq')
  {
    $main_entity = [];

    foreach ((array) $items as $item) {
      $question = zm_sd_normalize_text($item['question'] ?? '');
      $answer = zm_sd_normalize_text($item['answer'] ?? '');

      if ($question === '' || $answer === '') {
        continue;
      }

      $main_entity[] = [
        '@type' => 'Question',
        'name' => $question,
        'acceptedAnswer' => [
          '@type' => 'Answer',
          'text' => $answer,
        ],
      ];
    }

    if (empty($main_entity)) {
      return null;
    }

    return [
      '@type' => 'FAQPage',
      '@id' => zm_sd_current_url() . $id_suffix,
      'url' => zm_sd_current_url(),
      'mainEntity' => $main_entity,
      'inLanguage' => 'ja-JP',
    ];
  }
}

if (!function_exists('zm_sd_get_page_faq_schema')) {
  function zm_sd_get_page_faq_schema()
  {
    if (!is_page('faq') || !function_exists('zm_get_faq_sections')) {
      return null;
    }

    return zm_sd_get_faq_schema(zm_sd_flatten_faq_items(zm_get_faq_sections()));
  }
}

if (!function_exists('zm_sd_get_column_faq_items')) {
  function zm_sd_get_column_faq_items($post_id)
  {
    if (
      function_exists('zm_single_column_get_acf_content') &&
      function_exists('zm_single_column_parse_content')
    ) {
      $acf_content = zm_single_column_get_acf_content($post_id);
      if (!empty($acf_content['faq_items'])) {
        return $acf_content['faq_items'];
      }

      $parsed_content = zm_single_column_parse_content(get_post_field('post_content', $post_id));
      if (!empty($parsed_content['faq_items'])) {
        return $parsed_content['faq_items'];
      }
    }

    return [];
  }
}

if (!function_exists('zm_sd_get_article_schema')) {
  function zm_sd_get_article_schema($post = null)
  {
    $post = get_post($post);
    if (!is_object($post) || !isset($post->ID)) {
      return null;
    }

    $company = zm_sd_company_data();
    $thumbnail_id = get_post_thumbnail_id($post->ID);
    $thumbnail_data = $thumbnail_id ? wp_get_attachment_image_src($thumbnail_id, 'full') : false;
    $image_url = $thumbnail_data ? $thumbnail_data[0] : $company['logo'];
    $image_width = $thumbnail_data ? (int) $thumbnail_data[1] : $company['logo_width'];
    $image_height = $thumbnail_data ? (int) $thumbnail_data[2] : $company['logo_height'];

    $category_name = '';
    if ($post->post_type === 'post') {
      $categories = get_the_category($post->ID);
      if (!empty($categories) && !is_wp_error($categories)) {
        $category_name = $categories[0]->name;
      }
    } elseif ($post->post_type === 'column' && function_exists('zm_single_column_get_term_name')) {
      $category_name = zm_single_column_get_term_name($post->ID);
    }

    $description = function_exists('zm_get_singular_meta_description')
      ? zm_get_singular_meta_description($post)
      : zm_sd_normalize_text($post->post_excerpt ?: $post->post_content);

    return [
      '@type' => $post->post_type === 'post' ? 'Article' : 'BlogPosting',
      '@id' => get_permalink($post) . '#article',
      'headline' => wp_strip_all_tags(get_the_title($post)),
      'description' => $description,
      'datePublished' => get_the_date('c', $post),
      'dateModified' => get_the_modified_date('c', $post),
      'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => get_permalink($post),
      ],
      'image' => [
        '@type' => 'ImageObject',
        'url' => $image_url,
        'width' => $image_width,
        'height' => $image_height,
      ],
      'author' => [
        '@type' => 'Person',
        'name' => get_the_author_meta('display_name', (int) $post->post_author),
      ],
      'publisher' => [
        '@id' => trailingslashit($company['url']) . '#organization',
      ],
      'inLanguage' => 'ja-JP',
      'articleSection' => $category_name,
    ];
  }
}

if (!function_exists('zm_sd_get_job_posting_schema')) {
  function zm_sd_get_job_posting_schema()
  {
    if (!is_page('guidelines')) {
      return null;
    }

    $page = get_queried_object();
    if (!is_object($page) || !isset($page->ID)) {
      return null;
    }

    $company = zm_sd_company_data();
    $description = implode("\n", [
      'Z MOBILITY（株式会社Z）では、ハイヤードライバーを募集しています。',
      '一般乗用旅客自動車運送事業（ハイヤー）の正社員採用です。',
      '普通運転免許取得後1年以上（AT限定可）で応募可能、未経験スタートが80%です。',
      '1か月単位の変形労働時間制、1週間の平均労働時間40時間、月12乗務、休憩3時間の隔日勤務シフトです。',
      '勤務地は銀座本社、五反田営業所、目黒営業所、亀戸営業所、葛飾営業所、板橋営業所、練馬営業所、足立営業所です。',
      '賃金体系は205,968円以上に残業手当、深夜手当、その他手当が加算され、月給例は400,000円から600,000円です。',
      '二種免許取得費用全額会社負担、未経験者の給与保証、各種社会保険完備、有給休暇制度、マイカー通勤可、研修制度あり。',
    ]);

    $job_locations = [
      '銀座本社',
      '五反田営業所',
      '目黒営業所',
      '亀戸営業所',
      '葛飾営業所',
      '板橋営業所',
      '練馬営業所',
      '足立営業所',
    ];

    $job_location_items = [];
    foreach ($job_locations as $job_location) {
      $job_location_items[] = [
        '@type' => 'Place',
        'name' => $job_location,
        'address' => [
          '@type' => 'PostalAddress',
          'addressCountry' => 'JP',
          'addressRegion' => '東京都',
        ],
      ];
    }

    return [
      '@type' => 'JobPosting',
      '@id' => get_permalink($page) . '#jobposting',
      'title' => 'ハイヤードライバー',
      'description' => $description,
      'datePosted' => get_the_date('c', $page),
      'employmentType' => 'FULL_TIME',
      'hiringOrganization' => [
        '@id' => trailingslashit($company['url']) . '#organization',
      ],
      'industry' => '一般乗用旅客自動車運送事業（ハイヤー）',
      'jobLocation' => $job_location_items,
      'applicantLocationRequirements' => [
        '@type' => 'Country',
        'name' => 'JP',
      ],
      'baseSalary' => [
        '@type' => 'MonetaryAmount',
        'currency' => 'JPY',
        'value' => [
          '@type' => 'QuantitativeValue',
          'minValue' => 205968,
          'unitText' => 'MONTH',
        ],
      ],
      'estimatedSalary' => [
        '@type' => 'MonetaryAmountDistribution',
        'currency' => 'JPY',
        'median' => 500000,
        'percentile10' => 400000,
        'percentile90' => 600000,
        'duration' => 'P1M',
      ],
      'qualifications' => '普通運転免許取得後1年以上（AT限定可）。未経験応募可。',
      'experienceRequirements' => '未経験可。未経験スタート80%。',
      'workHours' => '1か月単位の変形労働時間制、1週間平均40時間、月12乗務、休憩3時間。',
      'jobBenefits' => '二種免許取得費用全額会社負担、未経験者の給与保証、各種社会保険完備、有給休暇制度、マイカー通勤可、安心の研修制度。',
      'directApply' => true,
      'url' => get_permalink($page),
    ];
  }
}

if (!function_exists('zm_sd_collect_graph')) {
  function zm_sd_collect_graph()
  {
    $graph = [
      zm_sd_get_organization_schema(),
      zm_sd_get_website_schema(),
    ];

    $breadcrumb_schema = zm_sd_get_breadcrumb_schema();
    if ($breadcrumb_schema) {
      $graph[] = $breadcrumb_schema;
    }

    $page_faq_schema = zm_sd_get_page_faq_schema();
    if ($page_faq_schema) {
      $graph[] = $page_faq_schema;
    }

    if (is_singular('column')) {
      $article_schema = zm_sd_get_article_schema(get_queried_object_id());
      if ($article_schema) {
        $graph[] = $article_schema;
      }

      $column_faq_schema = zm_sd_get_faq_schema(zm_sd_get_column_faq_items(get_queried_object_id()), '#column-faq');
      if ($column_faq_schema) {
        $graph[] = $column_faq_schema;
      }
    }

    if (is_singular('post')) {
      $article_schema = zm_sd_get_article_schema(get_queried_object_id());
      if ($article_schema) {
        $graph[] = $article_schema;
      }
    }

    $job_posting_schema = zm_sd_get_job_posting_schema();
    if ($job_posting_schema) {
      $graph[] = $job_posting_schema;
    }

    return array_values(array_filter($graph));
  }
}

if (!function_exists('zm_output_structured_data')) {
  function zm_output_structured_data()
  {
    $graph = zm_sd_collect_graph();
    if (empty($graph)) {
      return;
    }

    $payload = [
      '@context' => 'https://schema.org',
      '@graph' => $graph,
    ];

    echo '<script type="application/ld+json">' . wp_json_encode(
      $payload,
      JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    ) . '</script>' . "\n";
  }
}

add_action('wp_head', 'zm_output_structured_data', 30);
