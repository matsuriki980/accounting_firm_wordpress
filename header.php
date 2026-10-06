<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- title / og-title =============================================================  -->
    <?php
    if (is_front_page()) {
        // トップページ
        $page_title = get_bloginfo('name');
    } elseif (is_home()) {
        // 投稿一覧ページ
        $page_title = get_the_title(get_option('page_for_posts'));
    } elseif (is_post_type_archive('voice')) {
        // カスタム投稿一覧ページ
        $page_title = post_type_archive_title('', false);
    } else {
        // その他
        $page_title = get_the_title();
    }
    ?>

    <title><?php echo esc_html($page_title); ?>｜静岡県静岡市にある会計事務所</title>
    <meta property="og:title" content="<?php echo esc_attr($page_title); ?>｜静岡県静岡市にある会計事務所">
    <!-- title / og-title ここまで =============================================================  -->


    <!-- 実案件ではないため設定 -->
    <meta name="robots" content="noindex,nofollow">


    <!-- OGP設定 =============================================================  -->
    <?php
    // 固定ページ・通常投稿・カスタム投稿の詳細ページ
    if (is_singular()) {
        $og_url = get_permalink();

        // カスタム投稿の一覧（アーカイブ）ページ
    } elseif (is_post_type_archive()) {
        $og_url = get_post_type_archive_link(get_query_var('post_type'));

        // 通常投稿の一覧ページ
    } elseif (is_home()) {
        $og_url = get_permalink(get_option('page_for_posts'));

        // その他のページ
    } else {
        $og_url = home_url($_SERVER['REQUEST_URI']);
    }
    ?>

    <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
    <!-- OGP設定 =============================================================  -->


    <!-- og type =============================================================  -->
    <?php
    if (is_front_page()) {
        // トップページ
        $og_type = 'website';
    } else {
        // その他
        $og_type = 'article';
    }
    ?>

    <meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
    <!-- og type ここまで =============================================================  -->


    <meta property="og:description"
        content="静岡県静岡市を拠点とする青山会計事務所は、税務・会計業務、資産の承継、事業開始のサポートなど、多様な会計に関するサービスを提供しております。お客様それぞれのご要望やお悩みに対して、専門家の立場から親身になってご支援させていただきます。">
    <meta property="og:site_name" content="青山会計事務所">

    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>