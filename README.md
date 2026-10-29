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

### カスタム投稿タイプ作成
- Custom Post Type UI
- Advanced Custom Fields

### サーバーアップロード
- All-in-One WP Migration and Backup
<br>
<br>

## 工夫点

### ページ判定によるメタ情報の一括管理

ページごとに異なる`<title>`や`<og:type>`などのメタ情報を、条件分岐によって一括管理する仕組みを実装しました。    
具体的には、ページの種類に応じて出力する値を判定し、変数に格納することで、共通のHTML構造から各ページに適したメタ情報を出力できるようにしました。    
これにより、テンプレート内の重複した記述を削減し、コードの可読性と保守性の向上を図りました。

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

### functions.phpによるCSS・JavaScriptの読み込み管理

CSSやJavaScriptの読み込み処理を各テンプレートファイルに記述すると、管理が複雑になり、修正時の作業負担が増えるという課題がありました。  
そこで、WordPressのfunctions.phpにwp_enqueue_style()とwp_enqueue_script()を使用した読み込み処理を集約し、一括管理できるようにしました。  
これにより、各テンプレートへの重複した記述を防ぎ、コードの保守性と管理効率の向上を図りました。
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

