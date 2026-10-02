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
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section class="p-voice-detail js-header-bg-trigger">
                <div class="p-voice-detail__inner">
                    <article class="p-voice-detail__article">
                        <header class="p-voice-detail__head">
                            <time datetime="<?php the_time('Y-m-d'); ?>" class="u-en p-voice-detail__time"><?php the_time('Y.m.d'); ?></time>
                            <h1 class="p-voice-detail__title"><?php the_title(); ?></h1>
                        </header>

                        <figure class="p-voice-detail__figure">
                            <?php if (has_post_thumbnail()):  ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php endif; ?>
                            <figcaption class="p-voice-detail__figcaption">
                                <?php the_field('caption'); ?>
                            </figcaption>
                        </figure>

                        <section class="p-voice-detail__question">
                            <div class="p-voice-detail__question-block">
                                <h2 class="p-voice-detail__question-title">まず初めに、青山会計事務所にご依頼いただいた経緯からお伺いしてもよろしいですか？</h2>
                                <p class="p-voice-detail__question-text">
                                    <?php the_field('question01'); ?>
                                </p>
                            </div>
                            <div class="p-voice-detail__question-block">
                                <h2 class="p-voice-detail__question-title">青山会計事務所に依頼してみての印象はいかがでしょうか？</h2>
                                <p class="p-voice-detail__question-text">
                                    <?php the_field('question02'); ?>
                                </p>
                            </div>
                            <div class="p-voice-detail__question-block">
                                <h2 class="p-voice-detail__question-title">今後も会計周りでお困りごとがありましたらお気軽にご相談ください。</h2>
                                <p class="p-voice-detail__question-text">
                                    <?php the_field('question03'); ?>
                                </p>
                            </div>
                        </section>

                        <p class="p-voice-detail__company-name"><?php the_title(); ?></p>
                    </article>

                    <div class="p-voice-detail__btn-wrapper">
                        <a class="c-btn-default__wrapper" href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">
                            <span class="c-btn-default__border"></span>
                            <span class="c-btn-default__text-wrapper">
                                <span class="c-btn-default__text">お客様の一覧へ戻る</span>
                                <span class="c-btn-default__text">お客様の一覧へ戻る</span>
                            </span>
                        </a>
                    </div>

                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php

    // function.phpから投稿タイプ[voice]の投稿をすべて取得する関数を呼び出す
    $all_posts =  get_post_data_voice();

    // 投稿タイプ[voice]の全ての投稿数を取得し、変数に格納する
    $post_all_number = wp_count_posts($all_posts['post_type'])->publish;

    // 現在の投稿が全体の何番目かを取得する
    $current_post = array_search(get_the_ID(), get_posts($all_posts)) + 1;
    echo $current_post;

    // 現在の投稿から3件後の投稿の連番を取得する
    $current_post_next_three_number = $current_post + 3;
    echo $current_post_next_three_number;
    echo $post_all_number;

    // 次の三件のデータを格納する変数
    $next_posts = [];

    if ($current_post_next_three_number > $post_all_number) {
        $remaining_ids = array_slice(get_posts($all_posts), $current_post); //現在の投稿の次から最後の投稿までを取得
        $shortage_count = 3 - count($remaining_ids); //3件を表示するのに足りない分の数を計算
        $loop_ids = array_slice(get_posts($all_posts), 0, $shortage_count); //足りない分だけ最初の投稿から順に取得
        $next_three_ids = array_merge($remaining_ids, $loop_ids); //$remaining_idsと$loop_idsを結合してその中の3つを表示する

        // 次の投稿が3件以下なら1件目の投稿に戻る
        $next_posts = new WP_Query([
            'post_type' => 'voice', //投稿タイプ[voice]の投稿を取得
            'post__in'  => $next_three_ids, //切り出した3件のIDの配列を指定
            'orderby'   => 'post__in', //IDが並んでいる順番通りにデータを取得する
            'posts_per_page' => 3, //3件の投稿を表示
        ]);
    } else {
        // 次の投稿が3件以上なら次の3件目を表示する
        $next_three_ids = array_slice(get_posts($all_posts), $current_post, 3);

        $next_posts = new WP_Query([
            'post_type' => 'voice', //投稿タイプ[voice]の投稿を取得
            'post__in'  => $next_three_ids, //切り出した3件のIDの配列を指定
            'orderby'   => 'post__in', //IDが並んでいる順番通りにデータを取得する
            'posts_per_page' => 3, //3件の投稿を表示
        ]);
    };
    ?>


    <?php if ($next_posts->have_posts()) : ?>
        <!--======================  other  ======================-->
        <section class="p-voice-other">
            <div class="p-voice-other__inner">
                <div class="c-title__wrapper p-voice-other__title-wrapper">
                    <h2 class="c-title-ja">その他のお客様の声</h2>
                    <p class="c-title-en u-en p-voice-other__title-en">other</p>
                </div>

                <ol class="p-voice-other__list">
                    <?php while ($next_posts->have_posts()) : $next_posts->the_post(); ?>
                        <li class="p-voice-other__item">
                            <article class="c-voice-item">
                                <a href="<?php the_permalink(); ?>" class="c-voice-item__link p-voice-other__link u-p">
                                    <span class="c-voice-item__number u-en">
                                        (<?php
                                            $each_number = array_search(get_the_ID(), get_posts($all_posts)) + 1;
                                            echo sprintf('%02d', $each_number);
                                            ?>)
                                    </span>
                                    <div class="c-voice-item__img">
                                        <?php if (has_post_thumbnail()):  ?>
                                            <?php the_post_thumbnail('large'); ?>
                                        <?php endif; ?>
                                    </div>

                                    <p class="c-voice-item__company"><?php the_title(); ?></p>
                                    <p class="c-voice-item__text"><?php the_field('caption'); ?></p>
                                </a>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ol>
            </div>
        </section>
    <?php
        wp_reset_postdata();
    endif;
    ?>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>