<nav class="l-news-sidebar__nav" aria-label="newsページサイドバー 「category」">
    <h2 class="l-news-sidebar__title u-en">category</h2>
    <ul class="l-news-sidebar__list">

        <?php
        // 公開されている通常投稿の件数を取得
        $post_count = wp_count_posts('post')->publish;
        ?>

        <li class="l-news-sidebar__item"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-news-sidebar__link">すべて<span
                    class="l-news-sidebar__count">(<?php echo esc_html($post_count); ?>)</span></a></li>
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