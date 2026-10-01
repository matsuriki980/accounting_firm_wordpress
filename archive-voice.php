<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

<main>

    <!--======================  fv  ======================-->
    <div class="l-fv-sub-page p-voice-fv">
        <div class="l-fv-sub-page__title-wrapper">
            <h1 class="l-fv-sub-page__title-ja">お客様の声</h1>
            <p class="l-fv-sub-page__title-en u-en">
                <span>Customer</span>
                <span>Voice</span>
            </p>
        </div>
    </div>

    <!--======================  content  ======================-->
    <section class="p-voice js-header-bg-trigger">

        <!-- SEO対策 見た目は隠す -->
        <h2 class="u-visually-hidden">お客様の声</h2>

        <div class="p-voice__inner">
            <ol class="p-voice__list">
                <li class="p-voice__item">
                    <article class="c-voice-item">
                        <a href="detail/" class="c-voice-item__link u-p">
                            <span class="c-voice-item__number u-en">(01)</span>
                            <div class="c-voice-item__img">
                                <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                            </div>

                            <p class="c-voice-item__company">株式会社桐嶋製作所 K・O様</p>
                            <h3 class="c-voice-item__text">数字のプロ。言われたことだけじゃなく、提案までしてくれるのでいつも助かります</h3>
                        </a>
                    </article>
                </li>
                <li class="p-voice__item">
                    <article class="c-voice-item">
                        <a href="detail/" class="c-voice-item__link u-p">
                            <span class="c-voice-item__number u-en">(02)</span>
                            <div class="c-voice-item__img">
                                <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                            </div>

                            <p class="c-voice-item__company">会社名が入ります</p>
                            <h3 class="c-voice-item__text">タイトルが入りますタイトルが入ります</h3>
                        </a>
                    </article>
                </li>
                <li class="p-voice__item">
                    <article class="c-voice-item">
                        <a href="detail/" class="c-voice-item__link u-p">
                            <span class="c-voice-item__number u-en">(03)</span>
                            <div class="c-voice-item__img">
                                <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                            </div>

                            <p class="c-voice-item__company">会社名が入ります</p>
                            <h3 class="c-voice-item__text">タイトルが入りますタイトルが入ります</h3>
                        </a>
                    </article>
                </li>
                <li class="p-voice__item">
                    <article class="c-voice-item">
                        <a href="detail/" class="c-voice-item__link u-p">
                            <span class="c-voice-item__number u-en">(04)</span>
                            <div class="c-voice-item__img">
                                <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                            </div>

                            <p class="c-voice-item__company">会社名が入ります</p>
                            <h3 class="c-voice-item__text">タイトルが入りますタイトルが入ります</h3>
                        </a>
                    </article>
                </li>
                <li class="p-voice__item">
                    <article class="c-voice-item">
                        <a href="detail/" class="c-voice-item__link u-p">
                            <span class="c-voice-item__number u-en">(05)</span>
                            <div class="c-voice-item__img">
                                <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                            </div>

                            <p class="c-voice-item__company">会社名が入ります</p>
                            <h3 class="c-voice-item__text">タイトルが入りますタイトルが入ります</h3>
                        </a>
                    </article>
                </li>
                <li class="p-voice__item">
                    <article class="c-voice-item">
                        <a href="detail/" class="c-voice-item__link u-p">
                            <span class="c-voice-item__number u-en">(06)</span>
                            <div class="c-voice-item__img">
                                <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                            </div>

                            <p class="c-voice-item__company">会社名が入ります</p>
                            <h3 class="c-voice-item__text">タイトルが入りますタイトルが入ります</h3>
                        </a>
                    </article>
                </li>
            </ol>


            <div class="c-pagination-btn__wrapper">
                <div class="c-pagination-btn u-en c-pagination-btn--is-active">01</div>
                <a href="#" class="c-pagination-btn u-en">02</a>
            </div>
        </div>

    </section>

</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>