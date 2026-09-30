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
                            <li class="p-news__item">
                                <article class="c-news-item">
                                    <a href="<?php the_permalink(); ?>" class="c-news-item__link">
                                        <div class="c-news-item__img">
                                            <?php if (has_post_thumbnail()):  ?>
                                                <?php the_post_thumbnail('large'); ?>
                                            <?php endif; ?>
                                        </div>

                                        <div class="c-news-item__content">
                                            <div class="c-news-item__info">

                                                <?php
                                                $categories = get_the_category();
                                                if ($categories)
                                                ?>
                                                <p class="c-news-item__category">
                                                    <?php foreach ($categories as $category) : ?>
                                                        <?php echo $category->name; ?>
                                                    <?php endforeach; ?>
                                                </p>

                                                <time class="c-news-item__date u-en" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                            </div>

                                            <p class="c-news-item__title"><?php the_title(); ?></p>
                                        </div>
                                    </a>
                                </article>
                            </li>
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