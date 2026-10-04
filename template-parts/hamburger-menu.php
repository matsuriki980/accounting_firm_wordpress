    <!--======================  hamburger-menu  ======================-->
    <div class="l-hamburger-menu js-hamburger-menu">
        <div class="l-hamburger-menu__inner">
            <nav class="l-hamburger-menu__nav" aria-label="ハンバーガーメニューのナビゲーション">
                <ul class="l-hamburger-menu__list">

                    <?php $feature = get_page_by_path('feature'); ?>
                    <li class="l-hamburger-menu__item js-hamburger-menu__item" data-item="feature"><a href="<?php echo get_permalink($feature->ID); ?>" class="l-hamburger-menu__link">青山会計事務所の強み</a>
                    </li>
                    <li class="l-hamburger-menu__item l-hamburger-menu__item--has-child js-hamburger-menu__item" data-item="service">
                        <a href="service/" class="l-hamburger-menu__link">サービス内容</a>
                        <ul class="l-hamburger-menu__sub-list">
                            <li class="l-hamburger-menu__sub-item">
                                <a href="service#tax" class="l-hamburger-menu__sub-link">税務・会計</a>
                            </li>
                            <li class="l-hamburger-menu__sub-item">
                                <a href="service#capital" class="l-hamburger-menu__sub-link">相続・贈与・譲渡所得</a>
                            </li>
                            <li class="l-hamburger-menu__sub-item">
                                <a href="service#support" class="l-hamburger-menu__sub-link">設立・開業支援</a>
                            </li>
                        </ul>
                    </li>
                    <li class="l-hamburger-menu__item l-hamburger-menu__item--has-child js-hamburger-menu__item" data-item="about">
                        <a href="about/" class="l-hamburger-menu__link">事務所案内</a>
                        <ul class="l-hamburger-menu__sub-list">
                            <li class="l-hamburger-menu__sub-item">
                                <a href="about#message" class="l-hamburger-menu__sub-link">代表挨拶</a>
                            </li>
                            <li class="l-hamburger-menu__sub-item">
                                <a href="about#values" class="l-hamburger-menu__sub-link">経営理念</a>
                            </li>
                            <li class="l-hamburger-menu__sub-item">
                                <a href="about#company" class="l-hamburger-menu__sub-link">事務所概要</a>
                            </li>
                            <li class="l-hamburger-menu__sub-item">
                                <a href="about#access" class="l-hamburger-menu__sub-link">アクセス</a>
                            </li>
                        </ul>
                    </li>
                    <li class="l-hamburger-menu__item js-hamburger-menu__item" data-item="voice"><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="l-hamburger-menu__link">お客様の声</a></li>
                    <li class="l-hamburger-menu__item js-hamburger-menu__item" data-item="news"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-hamburger-menu__link">お知らせ</a></li>
                    <li class="l-hamburger-menu__item js-hamburger-menu__item" data-item="contact"><a href="contact/" class="l-hamburger-menu__link">お問い合わせ</a></li>
                </ul>
            </nav>

            <div class="l-hamburger-menu__img u-sp-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-hamburger-menu-01.jpg" width="720" height="806"
                    alt="パソコンを手に笑顔で打ち合わせを行う男女4人" class="js-hamburger-menu__img is-active" data-img="feature">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-hamburger-menu-02.jpg" width="720" height="806"
                    alt="ノートパソコンを確認しながら提案を行うスーツ姿の爽やかな男性" class="js-hamburger-menu__img" data-img="service">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-hamburger-menu-03.jpg" width="720" height="806"
                    alt="開放感溢れる椅子が並ぶオフィス" class="js-hamburger-menu__img" data-img="about">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-hamburger-menu-04.jpg" width="720" height="806"
                    alt="スマートフォンを触る人物の手元とノートパソコン" class="js-hamburger-menu__img" data-img="voice">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-hamburger-menu-05.jpg" width="720" height="806"
                    alt="英語で書かれた新聞紙" class="js-hamburger-menu__img" data-img="news">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-hamburger-menu-06.jpg" width="720" height="806"
                    alt="ノートパソコンを持つキャリアウーマン" class="js-hamburger-menu__img" data-img="contact">
            </div>

            <div class="l-hamburger-menu__marquee c-marquee">
                <div class="c-marquee__text u-en">
                    Numbers Expert Numbers Expert
                </div>
                <div class="c-marquee__text u-en">
                    Numbers Expert Numbers Expert
                </div>
            </div>
        </div>
    </div>