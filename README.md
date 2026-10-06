# サイト名

[デモサイトを見る](https://matsuyamarikiya.jp/accounting_firm_wordpress/) 

![サイトのスクリーンショット](./assets/images/thumbnail.jpg)

## 概要

プロのデザイナーが制作した購入済みのデザインカンプをもとに、  
事前にHTML / CSS / JavaScriptでコーディングしたWebサイトを、  
WordPressのオリジナルテーマとして構築したポートフォリオ作品です。

お知らせやお客様の声などの更新頻度が高いコンテンツを、  
管理画面から編集・追加できるように実装しました。

## 制作目的

WordPressを用いたオリジナルテーマ開発の学習を目的に制作しました。  
コーディングだけでなく、更新頻度の高いコンテンツを管理画面から編集できる構成にし、
運用する担当者がHTMLやCSSを直接編集しなくても情報を更新できるサイトを目指しました。

## 担当範囲
- WordPressオリジナルテーマの構築
- 固定ページ・投稿ページ・一覧ページのテンプレート作成
- カスタム投稿タイプ・カスタムフィールドの設定
- お問い合わせフォームの実装 
- Git / GitHubによるバージョン管理

## 使用技術・ツール

- WordPress
- HTML5
- Sass / CSS
- Contact Form 7
- Git / GitHub

## 導入プラグイン
- お問い合わせフォーム： contact Form7 / Contact Form7 Multi Step Forms
- カスタム投稿： Custom Post Type UI / Advanced Custom Fields (ACF)

## 主な機能

- お知らせの投稿・一覧・詳細ページ
- お客様の声の投稿・一覧・詳細ページ
- カスタム投稿タイプによるコンテンツ管理
- カスタムフィールドを用いた入力項目の追加
- カテゴリー／タクソノミーによる投稿の分類
- お問い合わせフォーム
- ページネーション

## 管理画面で更新できる項目

| 項目 | 管理方法 | 想定する更新者 |
|---|---|---|
| お知らせ | 通常投稿 | サイト運用担当者 |
| お客様の声 | カスタム投稿タイプ | サイト運用担当者 |
| 各固定ページ | 固定ページ | サイト運用担当者 |

## 工夫した点

### 条件分岐タグを用いたページ別のhead情報管理

ページ種別によって異なる`title`、`og:title`、`og:url`、`og:type`を、
WordPressの条件分岐タグで出し分けています。

- トップページ：サイト名をタイトルに設定し、`og:type`は`website`
- 投稿一覧：投稿ページとして設定した固定ページのタイトル・URLを取得
- カスタム投稿タイプ「voice」の一覧：アーカイブタイトル・アーカイブURLを取得
- 固定ページ・通常投稿・カスタム投稿の詳細：各ページのタイトル・パーマリンクを取得
- その他のページ：現在のリクエストURLをもとにURLを設定

条件分岐の中で`<title>`・`<meta>`タグを個別に出力するのではなく、
`$page_title`、`$og_url`、`$og_type`へ必要な値だけを代入し、
タグの出力部分を共通化しました。

ページ種別が増えた場合も、条件分岐へ値の取得処理を追加するだけで対応できるため、
重複を抑えながらmeta情報を管理しやすい構成にしています。

### 共通テンプレートパーツ化による保守性の向上

ヘッダー、フッターなど複数ページで共通して使用する要素は、
テンプレートパーツとして分割して管理しています。

各ページのテンプレートファイルに同じHTMLを繰り返し記述するのではなく、
`get_header()`、`get_footer()`、`get_template_part()`を用いて共通パーツを読み込む構成にしました。

これにより、ナビゲーション項目やフッター情報などを修正する際も、
該当するテンプレートパーツを修正するだけで全ページへ反映できます。
ページ追加時にも共通部分を再記述する必要がないため、
記述の重複を抑え、修正漏れを防ぎやすい保守性を意識した実装にしています。

### functions.phpでのCSS・JavaScriptの一元管理

CSS・JavaScriptファイルは、HTMLに直接記述するのではなく、
`functions.php`内で`wp_enqueue_style()`と`wp_enqueue_script()`を用いて読み込んでいます。

アセットファイルのパスや読み込み順を`functions.php`に集約することで、
CSS・JavaScriptファイルの追加・削除・ファイル名変更が発生した場合も、
修正箇所を限定して管理できる構成にしました。

また、ページごとに必要なファイルのみを読み込む処理を追加しやすく、
今後の機能追加やパフォーマンス改善にも対応しやすい設計を意識しています。

## テンプレート構成

```text
accounting_firm/
├── assets/
│   ├── css/
│   ├── js/
│   ├── scss/
│   └── images/
│
├── template-parts/
├── header.php
├── footer.php
├── front-page.php
├── home.php
├── archive-voice.php
├── single.php
├── single-voice.php
├── index.php
├── functions.php
├── page.php
├── 404.php
└── style.css
```

- `header.php`：head設定
- `footer.php`：wp_footer()を記述するためのファイル
- `single.php`：お知らせ詳細
- `front-page.php`：トップ
- `home.php`：お知らせ一覧
- `index.php`：お知らせ一覧 (アーカイブ/日付)
- `single.php`：お知らせ詳細
- `archive-{voice}.php`：お客様の声の一覧
- `single-{voice}.php`：お客様の声の詳細
- `page.php`：各固定ページ (コンテンツは管理画面で管理)
- `404.php`：404エラー
- `template-parts/`：ヘッダー・フッターなどの共通パーツ
- `functions.php`：テーマ機能、CSS／JavaScript読み込みなど
