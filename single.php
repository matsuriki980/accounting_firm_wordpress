<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

<main>

    <!--======================  detail  ======================-->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section class="p-news-detail js-header-bg-trigger">
                <div class="p-news-detail__inner">
                    <div class="p-news__sidebar-wrapper">
                        <p class="p-news-detail__title u-en">news</p>

                        <aside class="l-news-sidebar p-news-detail__sidebar">
                            <!-- ===================== news-sidebarを読み込む ===================== -->
                            <?php get_template_part("template-parts/news-sidebar"); ?>
                        </aside>
                    </div>

                    <div class="p-news-detail__block">
                        <article class="p-news-detail__article">
                            <div class="p-news-detail__article-head">
                                <div class="c-news-item__info">
                                    <p class="c-news-item__category">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories)
                                        ?>
                                        <?php foreach ($categories as $category) : ?>
                                            <?php echo $category->name; ?>
                                        <?php endforeach; ?>
                                    </p>
                                    <time class="c-news-item__date u-en" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </div>

                                <h1 class="p-news-detail__article-title"><?php the_title(); ?></h1>
                            </div>

                            <figure class="p-news-detail__article-figure">
                                <?php if (has_post_thumbnail()):  ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </figure>

                            <div class="p-news-detail__article-content">
                                <?php the_content(); ?>
                            </div>
                        </article>

                        <a class="c-btn-default__wrapper p-news-detail__btn-wrapper" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
                            <span class="c-btn-default__border"></span>
                            <span class="c-btn-default__text-wrapper">
                                <span class="c-btn-default__text">お知らせ一覧へ戻る</span>
                                <span class="c-btn-default__text">お知らせ一覧へ戻る</span>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>