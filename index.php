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
                        <div
                            class="c-pagination-btn u-en c-pagination-btn--is-active p-news__pagination-btn p-news__pagination-btn--is-active">
                            01</div>
                        <a href="#" class="c-pagination-btn u-en p-news__pagination-btn">02</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>