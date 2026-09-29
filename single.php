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
                            <nav class="l-news-sidebar__nav" aria-label="newsページサイドバー 「category」">
                                <h2 class="l-news-sidebar__title u-en">category</h2>
                                <ul class="l-news-sidebar__list">
                                    <li class="l-news-sidebar__item"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-news-sidebar__link">すべて<span
                                                class="l-news-sidebar__count">(52)</span></a></li>
                                    <?php
                                    $args = [
                                        'title_li' => '',
                                        'show_count' => true, // 投稿件数を表示する
                                    ];
                                    wp_list_categories($args);
                                    ?>

                                </ul>
                            </nav>

                            <nav class="l-news-sidebar__nav" aria-label="newsページサイドバー 「archive」">
                                <h2 class="l-news-sidebar__title u-en">archive</h2>
                                <ul class="l-news-sidebar__list l-news-sidebar__list--archive">
                                    <?php
                                    $args = [
                                        'show_post_count' => true, // 投稿件数を表示する
                                        'type' => 'yearly'
                                    ];
                                    wp_get_archives($args);
                                    ?>
                                    </li>
                                </ul>
                            </nav>
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