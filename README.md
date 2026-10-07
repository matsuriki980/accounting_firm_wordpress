# 青山会計事務所 WordPress構築版
<br>

## 概要
HTML・CSS・JavaScriptで構築した架空の会計事務所「青山会計事務所」のWebサイトに、   
WordPressを組み込みました。

[Brain Market](https://brain-market.com/u/hiroyuu/a/b0QzN5kTMgoTZsNWa0JXY)
よりデザインカンプを購入し、実務を意識したWebサイトとして構築しました。
<br>
<br>

## サイトURL
[https://matsuyamarikiya.jp/accounting_firm_wordpress/](https://matsuyamarikiya.jp/accounting_firm_wordpress/)
<br>
<br>

## 制作情報

### 制作期間
8日

### 制作人数

- 個人制作

### 担当範囲

- 通常投稿・詳細ページ
- カスタム投稿・詳細ページ
- topページへのの投稿データの出力
- サーバーアップロード (さくらサーバー)
<br>
<br>

## 使用技術

- WordPress
<br>
<br>

## サイト構成

- トップページ（`top`）
- 青山会計事務所の強み（`feature`）
- サービス内容（`service`）
- お客様の声（`voice`）
- お知らせ（`news`）
- 事務所案内（`about`）
- お問い合わせ（`contact`）
- 入力内容確認（`confirm`）
- 送信完了（`thanks`）
- プライバシーポリシー（`privacy-policy`）
- 404エラーページ（`404`）
<br>
<br>

## 実装内容

- お知らせページ (通常投稿・詳細ページ)
- お客様の声ページ (カスタム投稿・詳細ページ)
- トップページ (お知らせ・お客様の声の投稿データを出力)
- お問い合わせフォーム (フォーム → 入力確認画面 → 送信完了画面の3ステップ)
<br>
<br>

## 使用プラグイン

### お問い合わせ
- Contact Form7
- Contact Form7 Multi-Step Forms

### サーバーアップロード
- All-in-One WP Migration and Backup
<br>
<br>

## 工夫点

### ページ判定による head タグの値切り替え

ページごとに `<title>` や `<og:type>` の記述が異なるため、  
テンプレートファイルの重複を防ぐために条件分岐でページタイプを判定し、変数に格納した値を出力する一元管理を実装しました。  
HTML タグの記述を減らすことで、保守性と可読性を向上させています。

```php
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
```

### function.php によるファイル読み込みの一括管理

CSS や JavaScript のファイル読み込みを各テンプレートファイルに記述すると管理が複雑になるため、  
`function.php` で `wp_enqueue_script()` と `wp_enqueue_style()` を使用して一元管理しました。
<br>
<br>

## ディレクトリ構成

```text
.
├── function.php 
├── header.php (head設定/ヘッダー)
├── footer.php (フッター)
├── front-page.php
├── home.php (通常投稿一覧)
├── index.php (通常投稿 アーカイブ・日付)
├── single.php
├── archive-voice.php
├── single-voice.php
├── page.php (各固定ページ 管理画面でコンテンツを設定)
├── 404.php
│
├── template-parts/
│   ├── hamburger-menu.php
│   ├── news-item.php
│   ├── news-sidebar.php
│   ├── pagination-btn.php
│   └── voice-item.php
│
└── assets/
    ├── img
    │   ├── about
    │   ├── common
    │   ├── feature
    │   ├── news
    │   ├── service
    │   ├── top
    │   └── voice
    │
    ├── js
    │   ├── module
    │   │   ├── contact-slider.js
    │   │   ├── hamburger-menu.js
    │   │   ├── header-bg.js
    │   │   ├── top-service-slider.js
    │   │   └── top-voice-slider.js
    │   ├── vendor
    │   │   └── splide-extension-auto-scroll.min.js
    │   └── main.js
    │
    ├── scss
    │   ├── component
    │   ├── foundation
    │   ├── global
    │   ├── layout
    │   ├── page
    │   ├── utility
    │   └── style.scss
    │
    └── css
        └── style.css
```
<br>
<br>

## 対応画面幅

- モバイル (375 ~ 899px)
- PC (900px ~)

