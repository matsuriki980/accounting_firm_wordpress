<?php

/**
 * CSS・JSアセットの読み込み
 */
function my_theme_enqueue_assets()
{
    // --------------------------------------------------
    // CSS の読み込み
    // --------------------------------------------------

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Zen+Kaku+Gothic+Antique:wght@400;500&display=swap',
        array(),
        null
    );


    // splide-core-min.css 
    wp_enqueue_style(
        'splide-core-min',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide-core.min.css',
        array('google-fonts'), // フォント読み込み後
        null
    );

    // style.css 
    wp_enqueue_style(
        'style-css',
        get_template_directory_uri() . '/assets/css/style.css',
        array('splide-core-min'), // splide読み込み後
        null
    );

    // --------------------------------------------------
    // JS の読み込み
    // --------------------------------------------------
    // Splide 本体
    wp_enqueue_script(
        'splide-js',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
        array(),
        null,
        true // フッター出力
    );

    // Splide Auto Scroll 拡張機能
    wp_enqueue_script(
        'splide-autoscroll-js',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js',
        array('splide-js'), // ← Splide本体のあとに読み込む
        null,
        true // フッター出力
    );

    // main-js
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('splide-autoscroll-js'), // 最後に読み込む
        null,  // バージョン番号（指定なしなら null）
        true   // フッターで出力
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

/**
 'main-js' に type="module" 属性を付与する
 */
function my_theme_script_loader_tag($attributes)
{
    // 対象のハンドル名（'main-js'）に対して type="module" を設定
    if (isset($attributes['id']) && $attributes['id'] === 'main-js-js') {
        $attributes['type'] = 'module';
    }
    return $attributes;
}
add_filter('wp_script_attributes', 'my_theme_script_loader_tag');

/**
 * Splide関連スクリプトに defer 属性を付与
 */
function my_theme_add_defer_attribute($attributes)
{
    // 自動生成されるID (splide-js-js, splide-autoscroll-js-js) を判定
    $target_ids = array('splide-js-js', 'splide-autoscroll-js-js');

    if (isset($attributes['id']) && in_array($attributes['id'], $target_ids, true)) {
        $attributes['defer'] = true;
    }
    return $attributes;
}
add_filter('wp_script_attributes', 'my_theme_add_defer_attribute');
