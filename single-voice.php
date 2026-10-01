<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

    <main>

        <!--======================  fv  ======================-->
        <div class="l-fv-sub-page p-voice-fv">
            <div class="l-fv-sub-page__title-wrapper">
                <div class="l-fv-sub-page__title-ja">お客様の声</div>
                <p class="l-fv-sub-page__title-en u-en">
                    <span>Customer</span>
                    <span>Voice</span>
                </p>
            </div>
        </div>

        <!--======================  detail  ======================-->
        <section class="p-voice-detail js-header-bg-trigger">
            <div class="p-voice-detail__inner">
                <article class="p-voice-detail__article">
                    <header class="p-voice-detail__head">
                        <time datetime="2026-09-15" class="u-en p-voice-detail__time">2026.09.15</time>
                        <h1 class="p-voice-detail__title">株式会社桐嶋製作所 K・O様</h1>
                    </header>

                    <figure class="p-voice-detail__figure">
                        <img src="../../assets/img/voice/p-voice__fv.jpg" alt="">
                        <figcaption class="p-voice-detail__figcaption">
                            「数字のプロ。言われたことだけじゃなく、提案までしてくれるのでいつも助かります」
                        </figcaption>
                    </figure>

                    <section class="p-voice-detail__question">
                        <div class="p-voice-detail__question-block">
                            <h2 class="p-voice-detail__question-title">まず初めに、青山会計事務所にご依頼いただいた経緯からお伺いしてもよろしいですか？</h2>
                            <p class="p-voice-detail__question-text">
                                もともと入っていただいていた会計事務所さんがあったのですが、年齢的に引退を考えているということで新しい会計事務所を探していました。そんな時、知り合いから青山会計事務所さんのことを紹介してもらったのがきっかけです。
                                一度お会いしてみて、代表の方や社員さんの人柄もよかったのでご依頼させていただこうと決心しました。
                                各分野で専門家の方が対応してくれるという点も大きかったですね。
                            </p>
                        </div>
                        <div class="p-voice-detail__question-block">
                            <h2 class="p-voice-detail__question-title">青山会計事務所に依頼してみての印象はいかがでしょうか？</h2>
                            <p class="p-voice-detail__question-text">
                                さすが数字のプロだなということが多々あります。比較するのもよくありませんが、
                                以前までの会計士の方は個人でやられており、最新の情報や他分野への知見があまりありませんでした。
                                青山会計事務所さんはただご依頼したことをやってくれる以外にも、「〇〇はこのようにするのはいかがでしょうか？」や「〇〇の他にお困りごとはございませんか？」と気配りもしてくれるので本当に助かります。
                                会計周りの知見はそんなにないのでリードしてもらえるとこちらもやりやすいです。
                            </p>
                        </div>
                        <div class="p-voice-detail__question-block">
                            <h2 class="p-voice-detail__question-title">今後も会計周りでお困りごとがありましたらお気軽にご相談ください。</h2>
                            <p class="p-voice-detail__question-text">
                                ありがとうございます。今後、新規事業の構築や既存事業のスケールを考えております。
                                また確認したいことや相談したいことが増えると思いますので、その際はどうぞよろしくお願いいたします。
                            </p>
                        </div>
                    </section>

                    <p class="p-voice-detail__company-name">株式会社桐嶋製作所 K・O様</p>
                </article>

                <div class="p-voice-detail__btn-wrapper">
                    <a class="c-btn-default__wrapper" href="../../voice/">
                        <span class="c-btn-default__border"></span>
                        <span class="c-btn-default__text-wrapper">
                            <span class="c-btn-default__text">お客様の一覧へ戻る</span>
                            <span class="c-btn-default__text">お客様の一覧へ戻る</span>
                        </span>
                    </a>
                </div>

            </div>
        </section>

        <!--======================  other  ======================-->
        <section class="p-voice-other">
            <div class="p-voice-other__inner">
                <div class="c-title__wrapper p-voice-other__title-wrapper">
                    <h2 class="c-title-ja">その他のお客様の声</h2>
                    <p class="c-title-en u-en p-voice-other__title-en">other</p>
                </div>

                <ol class="p-voice-other__list">
                    <li class="p-voice-other__item">
                        <article class="c-voice-item">
                            <a href="#" class="c-voice-item__link p-voice-other__link u-p">
                                <span class="c-voice-item__number u-en">(02)</span>
                                <div class="c-voice-item__img">
                                    <img src="../../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                                </div>

                                <p class="c-voice-item__company">株式会社桐嶋製作所 K・O様</p>
                                <p class="c-voice-item__text">数字のプロ。言われたことだけじゃなく、提案までしてくれるのでいつも助かります</p>
                            </a>
                        </article>
                    </li>
                    <li class="p-voice-other__item">
                        <article class="c-voice-item">
                            <a href="#" class="c-voice-item__link p-voice-other__link u-p">
                                <span class="c-voice-item__number u-en">(03)</span>
                                <div class="c-voice-item__img">
                                    <img src="../../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                                </div>

                                <p class="c-voice-item__company">会社名が入ります</p>
                                <p class="c-voice-item__text">タイトルが入りますタイトルが入ります</p>
                            </a>
                        </article>
                    </li>
                    <li class="p-voice-other__item">
                        <article class="c-voice-item">
                            <a href="#" class="c-voice-item__link p-voice-other__link u-p">
                                <span class="c-voice-item__number u-en">(04)</span>
                                <div class="c-voice-item__img">
                                    <img src="../../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                                </div>

                                <p class="c-voice-item__company">会社名が入ります</p>
                                <p class="c-voice-item__text">タイトルが入りますタイトルが入ります</p>
                            </a>
                        </article>
                    </li>
                </ol>
            </div>
        </section>
    </main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>