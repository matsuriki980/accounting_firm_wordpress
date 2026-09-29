<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>


<main>

    <!--======================  fv  ======================-->
    <div class="l-fv-sub-page p-news-fv">
        <div class="l-fv-sub-page__title-wrapper">
            <h1 class="l-fv-sub-page__title-ja">お知らせ</h1>
            <p class="l-fv-sub-page__title-en u-en">
                news
            </p>
        </div>
    </div>

    <!--======================  content  ======================-->
    <section class="p-news js-header-bg-trigger">
        <div class="p-news__inner">
            <div class="p-news__sidebar-wrapper">
                <aside class="l-news-sidebar p-news__sidebar">
                    <nav class="l-news-sidebar__nav" aria-label="newsページサイドバー 「category」">
                        <h2 class="l-news-sidebar__title u-en">category</h2>
                        <ul class="l-news-sidebar__list">
                            <li class="l-news-sidebar__item"><a href="#" class="l-news-sidebar__link">すべて<span
                                        class="l-news-sidebar__count">(52)</span></a></li>
                            <li class="l-news-sidebar__item"><a href="#" class="l-news-sidebar__link">お知らせ<span
                                        class="l-news-sidebar__count">(23)</span></a></li>
                            <li class="l-news-sidebar__item"><a href="#" class="l-news-sidebar__link">カテゴリー<span
                                        class="l-news-sidebar__count">(29)</span></a>
                            </li>
                        </ul>
                    </nav>

                    <nav class="l-news-sidebar__nav" aria-label="newsページサイドバー 「archive」">
                        <h2 class="l-news-sidebar__title u-en">archive</h2>
                        <ul class="l-news-sidebar__list">
                            <li class="l-news-sidebar__item"><a href="#" class="l-news-sidebar__link">2024年<span
                                        class="l-news-sidebar__count">(10)</span></a>
                            </li>
                            <li class="l-news-sidebar__item"><a href="#" class="l-news-sidebar__link">2023年<span
                                        class="l-news-sidebar__count">(32)</span></a>
                            </li>
                            <li class="l-news-sidebar__item"><a href="#" class="l-news-sidebar__link">2022年<span
                                        class="l-news-sidebar__count">(16)</span></a>
                            </li>
                        </ul>
                    </nav>
                </aside>
            </div>

            <div class="p-news__block">
                <ol class="p-news__list">
                    <li class="p-news__item">
                        <article class="c-news-item">
                            <a href="detail/" class="c-news-item__link">
                                <div class="c-news-item__img">
                                    <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                                </div>

                                <div class="c-news-item__content">
                                    <div class="c-news-item__info">
                                        <p class="c-news-item__category">お知らせ</p>
                                        <time class="c-news-item__date u-en" datetime="2026-09-10">2026.09.10</time>
                                    </div>

                                    <p class="c-news-item__title">ホームページをリニューアルしました</p>
                                </div>
                            </a>
                        </article>
                    </li>
                    <li class="p-news__item">
                        <article class="c-news-item">
                            <a href="detail/" class="c-news-item__link">
                                <div class="c-news-item__img">
                                    <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                                </div>

                                <div class="c-news-item__content">
                                    <div class="c-news-item__info">
                                        <p class="c-news-item__category">お知らせ</p>
                                        <time class="c-news-item__date u-en" datetime="2026-09-09">2026.09.09</time>
                                    </div>

                                    <p class="c-news-item__title">タイトルが入りますタイトルが入ります</p>
                                </div>
                            </a>
                        </article>
                    </li>
                    <li class="p-news__item">
                        <article class="c-news-item">
                            <a href="detail/" class="c-news-item__link">
                                <div class="c-news-item__img">
                                    <img src="../assets/img/voice/p-voice__fv.jpg" width="270" height="300" alt="">
                                </div>

                                <div class="c-news-item__content">
                                    <div class="c-news-item__info">
                                        <p class="c-news-item__category">お知らせ</p>
                                        <time class="c-news-item__date u-en" datetime="2026-09-08">2026.09.08</time>
                                    </div>

                                    <p class="c-news-item__title">タイトルが入りますタイトルが入ります</p>
                                </div>
                            </a>
                        </article>
                    </li>
                </ol>

                <div class="c-pagination-btn__wrapper">
                    <div
                        class="c-pagination-btn u-en c-pagination-btn--is-active p-news__pagination-btn p-news__pagination-btn--is-active">
                        01</div>
                    <a href="#" class="c-pagination-btn u-en p-news__pagination-btn">02</a>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>