<!--======================  header  ======================-->
<?php if (is_front_page() || is_single()) : ?>
    <header class="l-header js-header js-header--top">
    <?php else : ?>
        <header class="l-header js-header js-header--sub-page">
        <?php endif; ?>

        <div class="l-header__inner">
            <h1 class="l-header__logo" aria-label="青山会計事務所 ホームページロゴ">
                <a href="<?php echo home_url(); ?>" class="l-header__logo-link u-link c-logo u-mask-img" aria-label="topページに戻る"></a>
            </h1>

            <div class="l-header__content">
                <nav class="l-header__nav u-sp-hidden" aria-label="ヘッダーのグローバルナビゲーション">
                    <ul class="l-header__list">

                        <!-- feature -->
                        <?php $feature = get_page_by_path('feature'); ?>
                        <li class="l-header__item"><a href="<?php echo get_permalink($feature->ID); ?>" class="l-header__link u-underline">青山会計事務所の強み</a>
                        </li>

                        <!-- service -->
                        <?php $service = get_page_by_path('service'); ?>
                        <li class="l-header__item"><a href="<?php echo get_permalink($service->ID); ?>" class="l-header__link u-underline">サービス内容</a>
                        </li>

                        <!-- voice -->
                        <li class="l-header__item"><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="l-header__link u-underline">お客様の声</a></li>

                        <!-- news -->
                        <li class="l-header__item"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-header__link u-underline">お知らせ</a></li>

                        <!-- about -->
                        <?php $about = get_page_by_path('about'); ?>
                        <li class="l-header__item"><a href="<?php echo get_permalink($about->ID); ?>" class="l-header__link u-underline">事務所案内</a></li>
                    </ul>
                </nav>

                <div class="l-header__btns">
                    <a href="contact/" class="l-header__btn l-header__btn--contact" aria-label="お問い合わせページに移動する"></a>
                    <button class="l-header__btn l-header__btn--hamburger js-hamburger-btn" aria-label="ハンバーガーメニューを開く">
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        </header>