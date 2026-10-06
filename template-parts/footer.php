    <!--======================  footer  ======================-->
    <footer class="l-footer">

        <!-- contactページ リンク設定変数 -->
        <?php $contact = get_page_by_path('contact'); ?>

        <div class="l-footer__inner">

            <section class="l-footer__contact">
                <div class="l-footer__contact-inner u-pb">
                    <div class="l-footer__contact-content">
                        <div class="c-title__wrapper l-footer__contact-title-wrapper">
                            <h2 class="c-title-ja">お問い合わせ</h2>
                            <p class="c-title-en u-en l-footer__contact-title-en">contact us</p>
                        </div>

                        <div class="l-footer__contact-text u-pc-hidden">
                            <span>税務や会計について確認したいことなど、どのようなご相談でも構いません。</span>
                            <span>まずはお気軽にご相談ください。</span>
                        </div>

                        <div class="l-footer__contact-text u-sp-hidden">
                            <span>税務や会計について確認したいことなど、</span>
                            <span>どのようなご相談でも構いません。</span>
                            <span>まずはお気軽にご相談ください。</span>
                        </div>

                        <a href="<?php echo get_permalink($contact->ID); ?>" class="c-btn-arrow l-footer__contact-btn" ar ia-label="お問い合わせページに移動する">
                            <span class="c-btn-arrow__icon"></span>
                        </a>

                    </div>

                    <div class="l-footer__contact-img-area">
                        <div class="l-footer__contact-img-group l-footer__contact-img-group--first">
                            <div class="splide js-contact-slider-first" role="group" aria-label="Splideの基本的なHTML">
                                <div class="splide__track">
                                    <ul class="splide__list l-footer__contact-list">
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-01.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-01-sp.jpg" width="150"
                                                    height="90" alt="電卓を手にヒアリングを行うスーツ姿の人物">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-02.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-02-sp.jpg" width="150"
                                                    height="90" alt="笑顔で並ぶスーツ姿の男女">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-03.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-03-sp.jpg" width="150"
                                                    height="90" alt="スマートフォンを触る人物の手元とノートパソコン">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-01.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-01-sp.jpg" width="150"
                                                    height="90" alt="電卓を手にヒアリングを行うスーツ姿の人物">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-02.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-02-sp.jpg" width="150"
                                                    height="90" alt="笑顔で並ぶスーツ姿の男女">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-03.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-03-sp.jpg" width="150"
                                                    height="90" alt="スマートフォンを触る人物の手元とノートパソコン">
                                            </picture>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="l-footer__contact-img-group l-footer__contact-img-group--second">
                            <div class="splide js-contact-slider-second" role="group" aria-label="Splideの基本的なHTML">
                                <div class="splide__track">
                                    <ul class="splide__list l-footer__contact-list">
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-04.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-04-sp.jpg" width="150"
                                                    height="90" alt="ノートパソコンを手に和やかな雰囲気で打ち合わせを行う男女">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-05.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-05-sp.jpg" width="150"
                                                    height="90" alt="開放感溢れる椅子が並ぶオフィス">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-06.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-06-sp.jpg" width="150"
                                                    height="90" alt="電卓を手に提案を行う男性とそれを確認する女性">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-04.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-04-sp.jpg" width="150"
                                                    height="90" alt="ノートパソコンを手に和やかな雰囲気で打ち合わせを行う男女">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-05.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-05-sp.jpg" width="150"
                                                    height="90" alt="開放感溢れる椅子が並ぶオフィス">
                                            </picture>
                                        </li>
                                        <li class="splide__slide l-footer__content-item">
                                            <picture>
                                                <source media="(min-width: 900px)"
                                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-06.jpg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/l-contact-06-sp.jpg" width="150"
                                                    height="90" alt="電卓を手に提案を行う男性とそれを確認する女性">
                                            </picture>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="l-footer__content">
                <h2 class="l-footer__logo c-logo u-mask-img" aria-label="フッターナビゲーション ロゴ"></h2>

                <nav class="l-footer__nav">

                    <!-- 左の列 -->
                    <ul class="l-footer__list l-footer__list--left">

                        <!-- feature -->
                        <?php $feature = get_page_by_path('feature'); ?>
                        <li class="l-footer__item"><a href="<?php echo get_permalink($feature->ID); ?>" class="l-footer__link">青山会計事務所の強み</a>
                        </li>

                        <!-- service -->
                        <?php $service = get_page_by_path('service'); ?>
                        <li class="l-footer__item l-footer__item--has-child">
                            <a href="<?php echo get_permalink($service->ID); ?>" class="l-footer__link">サービス内容</a>
                            <ul class="l-footer__sub-list">
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($service->ID); ?>#tax" class="l-footer__sub-link">税務・会計</a>
                                </li>
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($service->ID); ?>#capital" class="l-footer__sub-link">相続・贈与・譲渡所得</a>
                                </li>
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($service->ID); ?>#support" class="l-footer__sub-link">設立・開業支援</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- 真ん中の列 -->
                    <ul class="l-footer__list l-footer__list--center">

                        <!-- about -->
                        <?php $about = get_page_by_path('about'); ?>
                        <li class="l-footer__item l-footer__item--has-child">
                            <a href="<?php echo get_permalink($about->ID); ?>" class="l-footer__link">事務所案内</a>
                            <ul class="l-footer__sub-list">
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($about->ID); ?>#message" class="l-footer__sub-link">代表挨拶</a>
                                </li>
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($about->ID); ?>#values" class="l-footer__sub-link">経営理念</a>
                                </li>
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($about->ID); ?>#company" class="l-footer__sub-link">事務所概要</a>
                                </li>
                                <li class="l-footer__sub-item">
                                    <a href="<?php echo get_permalink($about->ID); ?>#access" class="l-footer__sub-link">アクセス</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- 右の列 -->
                    <ul class="l-footer__list l-footer__list--right">

                        <!-- voice -->
                        <li class="l-footer__item"><a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="l-footer__link">お客様の声</a>
                        </li>

                        <!-- news -->
                        <li class="l-footer__item"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-footer__link">お知らせ</a></li>

                        <!-- contact -->
                        <li class="l-footer__item"><a href="<?php echo get_permalink($contact->ID); ?>" class="l-footer__link">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>

                <address class="l-footet__address">
                    <span>〒422-0000</span>
                    <span>静岡市駿河区森下町 静岡MMタワー14F</span>
                </address>

                <div class="l-footer__bottom">
                    <small class="l-footer__copy-right">©2026 Aoyama Tax Office.</small>

                    <!-- privacy-policy -->
                    <?php $privacy_policy = get_page_by_path('privacy-policy'); ?>
                    <a href="<?php echo get_permalink($privacy_policy->ID); ?>" class="l-footer__privacy-policy">プライバシーポリシー</a>
                </div>
            </section>

        </div>
    </footer>