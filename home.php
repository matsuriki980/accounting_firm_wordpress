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
    <?php if (have_posts()) : ?>
        <section class="p-news js-header-bg-trigger">
            <div class="p-news__inner">
                <div class="p-news__sidebar-wrapper">
                    <aside class="l-news-sidebar p-news__sidebar">
                        <!-- ===================== news-sidebarを読み込む ===================== -->
                        <?php get_template_part("template-parts/news-sidebar"); ?>
                    </aside>
                </div>

                <div class="p-news__block">
                    <ol class="p-news__list">
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- ===================== news-itemを読み込む ===================== -->
                            <?php get_template_part("template-parts/news-item"); ?>
                        <?php endwhile; ?>
                    </ol>

                    <div class="c-pagination-btn__wrapper">
                        <!-- ===================== pagination-btnを読み込む ===================== -->
                        <?php get_template_part("template-parts/pagination-btn"); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>