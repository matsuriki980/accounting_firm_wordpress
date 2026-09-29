<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

<main>

    <!--======================  detail  ======================-->
    <section class="p-news-detail js-header-bg-trigger">
        <div class="p-news-detail__inner">
            <div class="p-news__sidebar-wrapper">
                <p class="p-news-detail__title u-en">news</p>

                <aside class="l-news-sidebar p-news-detail__sidebar">
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

            <div class="p-news-detail__block">
                <article class="p-news-detail__article">
                    <div class="p-news-detail__article-head">
                        <div class="c-news-item__info">
                            <p class="c-news-item__category">お知らせ</p>
                            <time class="c-news-item__date u-en" datetime="2026-09-10">2026.09.10</time>
                        </div>

                        <h1 class="p-news-detail__article-title">ホームページをリニューアルしました</h1>
                    </div>

                    <figure class="p-news-detail__article-figure">
                        <img src="../../assets/img/news/p-news__fv.jpg" width="300" height="330" alt="">
                    </figure>

                    <div class="p-news-detail__article-content">
                        <p>
                            テキストが入りますテキストが入ります
                            テキストが入りますテキストが入ります
                            テキストが入りますテキストが入ります
                            テキストが入りますテキストが入ります
                            テキストが入りますテキストが入ります
                            テキストが入りますテキストが入ります
                            テキストが入りますテキストが入ります
                            テキストが入ります。
                        </p>
                    </div>
                </article>

                <a class="c-btn-default__wrapper p-news-detail__btn-wrapper" href="../..//news/">
                    <span class="c-btn-default__border"></span>
                    <span class="c-btn-default__text-wrapper">
                        <span class="c-btn-default__text">お知らせ一覧へ戻る</span>
                        <span class="c-btn-default__text">お知らせ一覧へ戻る</span>
                    </span>
                </a>
            </div>
        </div>
    </section>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>