<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

<main>
    <!--======================  fv  ======================-->
    <section class="p-top__fv">
        <div class="p-top__inner">
            <div class="p-top__fv-content">

                <div class="p-top__fv-copy-wrapper js-header-bg-trigger">
                    <p class="p-top__fv-copy-en u-en">
                        <span>numbers</span>
                        <span>expert</span>
                    </p>

                    <h2 class="p-top__fv-copy-ja">
                        <span>数字の専門家</span>
                        <span>ともに歩むパートナーとして</span>
                    </h2>
                </div>

                <a href="#p-top-about" class="p-top__fv-scroll-btn u-link" aria-label="aboutセクションにスクロール"></a>
            </div>

            <div class="p-top__fv-img">
                <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top__fv.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top__fv-sp.jpg" width="150" height="90"
                        alt="ノートパソコンを確認しながら打ち合わせを行う男女">
                </picture>
            </div>
        </div>
    </section>

    <!--======================  about  ======================-->
    <section id="p-top-about" class="p-top__about u-overflow-hidden">
        <div class="p-top__about-inner">
            <h2 class="p-top__about-title u-en">
                <span>Realization of</span>
                <span>I want to do this</span>
            </h2>

            <div class="p-top__about-block">
                <div class="p-top__about-content">
                    <h3 class="p-top__about-lead">「こうしたい」を実現する</h3>

                    <div class="p-top__about-text-wrapper">
                        <p class="p-top__about-text">
                            <span>寄り添い、ともに考え、ともに歩む。</span>
                            それが私たちの考える「数字の専門家」としての在り方です。
                        </p>
                        <p class="p-top__about-text">
                            <span>確かな知識と経験、誠実な対応、</span>
                            <span>そして何より、お客様の未来を想う気持ちを大切に、</span>
                            <span>これからも皆様の会社の成長をサポートしてまいります。</span>
                        </p>
                        <p class="p-top__about-text">
                            会計のことなら青山会計事務所にお任せください。
                        </p>
                    </div>

                    <a class="c-btn-default__wrapper p-top__about-btn" href="about/">
                        <span class="c-btn-default__border"></span>
                        <span class="c-btn-default__text-wrapper">
                            <span class="c-btn-default__text">私たちについて</span>
                            <span class="c-btn-default__text">私たちについて</span>
                        </span>
                    </a>
                </div>

                <div class="p-top__about-img u-sp-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top-about.jpg" width="600" height="420" alt="開放感のあるオフィスで笑顔で並ぶ男女3人組">
                </div>
            </div>
        </div>

        <div class="c-marquee">
            <div class="c-marquee__text u-en">
                As partners walking together
            </div>
            <div class="c-marquee__text u-en">
                As partners walking together
            </div>
        </div>
    </section>

    <!--======================  service  ======================-->
    <section class="p-top__service">
        <div class="p-top__service-inner">
            <div class="p-top__service-head">

                <div class="c-title__wrapper p-top__service-title-wrapper">
                    <h2 class="c-title-ja p-top__service-title-ja">サービス内容</h2>
                    <p class="c-title-en p-top__service-title-en u-en">our service</p>
                </div>

                <a class="c-btn-default__wrapper p-top__service-btn-wrapper" href="service/">
                    <span class="c-btn-default__border"></span>
                    <span class="c-btn-default__text-wrapper">
                        <span class="c-btn-default__text">サービス内容について詳しく見る</span>
                        <span class="c-btn-default__text">サービス内容について詳しく見る</span>
                    </span>
                </a>
            </div>

            <div class="splide js-top-service-slider" role="group" aria-label="Splideの基本的なHTML">
                <div class="splide__track p-top-service__slider-track">

                    <div class="splide__list p-top__service-cards">
                        <div class="splide__slide p-top__service-card">
                            <a href="service#tax" class="p-top__service-card-link">
                                <div class=" p-top__service-card-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top-service-01.jpg" width="270" height="300"
                                        alt="資料を確認し電卓を使う人物の手元">
                                </div>
                                <div class="p-top__service-card-content">
                                    <div class="p-top__service-card-title-wrapper">
                                        <h3 class="p-top__service-card-title-ja">
                                            税務・会計
                                            <span class="c-service__decorations p-top__service-card-decorations">
                                                <span></span>
                                            </span>
                                        </h3>
                                        <p class="p-top__service-card-title-en u-en">Tax & Accounting</p>
                                    </div>

                                    <span class="c-btn-arrow p-top__service-btn-arrow">
                                        <span class="c-btn-arrow__icon"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="splide__slide p-top__service-card">
                            <a href="service#capital" class="p-top__service-card-link">
                                <div class=" p-top__service-card-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top-service-02.jpg" width="270" height="300"
                                        alt="電卓を手に提案を行う男性とそれを確認する女性">
                                </div>
                                <div class="p-top__service-card-content">
                                    <div class="p-top__service-card-title-wrapper">
                                        <h3 class="p-top__service-card-title-ja">
                                            相続・贈与・譲渡所得
                                            <span class="c-service__decorations p-top__service-card-decorations">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </h3>
                                        <p class="p-top__service-card-title-en u-en">Capital gains</p>
                                    </div>

                                    <span class="c-btn-arrow p-top__service-btn-arrow">
                                        <span class="c-btn-arrow__icon"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="splide__slide p-top__service-card">
                            <a href="service#support" class="p-top__service-card-link">
                                <div class=" p-top__service-card-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top-service-03.jpg" width="270" height="300"
                                        alt="ビル群の前に佇むキャリアウーマン">
                                </div>
                                <div class="p-top__service-card-content">
                                    <div class="p-top__service-card-title-wrapper">
                                        <h3 class="p-top__service-card-title-ja">
                                            設立・開業支援
                                            <span class="c-service__decorations p-top__service-card-decorations">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </h3>
                                        <p class="p-top__service-card-title-en u-en">Support for opening a
                                            business
                                        </p>
                                    </div>

                                    <span class="c-btn-arrow p-top__service-btn-arrow">
                                        <span class="c-btn-arrow__icon"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================  feature  ======================-->
    <section class="p-top-feature u-overflow-hidden">
        <div class="p-top-feature__inner">
            <div class="c-title__wrapper p-top-feature__title-wrapper">
                <h2 class="c-title-ja p-top-feature__title-ja">青山会計事務所の強み</h2>
                <p class="c-title-en p-top-feature__title-en u-en">our feature</p>
            </div>

            <div class="p-top-feature__block">
                <div class="p-top-feature__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/p-top-feature-01.jpg" width="250" height="335"
                        alt="ノートパソコンを使って打ち合わせを行うスーツ姿の男性2人">
                </div>
                <div class="p-top-feature__content">
                    <h3 class="p-top-feature__lead">
                        <span>一言でいえば、</span>
                        <span>プロフェッショナル。</span>
                    </h3>

                    <p class="p-top-feature__text">
                        <span>税務・会計・相続・贈与・譲渡所得など、それぞれの分野に専門家を配置しております。</span>
                        <span>また、司法書士や行政書士など他士業の方々ともネットワークを構築しており、
                            青山会計事務所にご相談いただければトータルでサポートできるのが特徴です。</span>
                    </p>

                    <a class="c-btn-default__wrapper p-top-feature__btn-wrapper" href="feature/">
                        <span class="c-btn-default__border"></span>
                        <span class="c-btn-default__text-wrapper">
                            <span class="c-btn-default__text">青山会計事務所の強みを見る</span>
                            <span class="c-btn-default__text">青山会計事務所の強みを見る</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="c-marquee p-top-feature__marquee">
            <div class="c-marquee__text u-en">
                Professional in a word.
            </div>
            <div class="c-marquee__text u-en">
                Professional in a word.
            </div>
        </div>
    </section>

    <!--======================  voice  ======================-->
    <section class="p-top-voice">
        <div class="p-top-voice__inner">

            <div class="p-top-voice__block">
                <div class="p-top-voice__content">
                    <div class="c-title__wrapper p-top-voice__title-wrapper">
                        <h2 class="c-title-ja p-top-voice__title-ja">お客様の声</h2>
                        <p class="c-title-en p-top-voice__title-en u-en">customer voice</p>
                    </div>

                    <div class="p-top-voice__btns u-sp-hidden">
                        <button class="c-btn-arrow p-top-voice__btn p-top-voice__btn--back js-top-voice__btn-back"
                            aria-label="カルーセルスライダー 戻る">
                            <span class="c-btn-arrow__icon"></span>
                        </button>
                        <button class="c-btn-arrow p-top-voice__btn p-top-voice__btn--next js-top-voice__btn-next"
                            aria-label="カルーセルスライダー 進む">
                            <span class="c-btn-arrow__icon"></span>
                        </button>
                    </div>
                </div>

                <div class="splide js-top-voice-slider">

                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <article class="c-voice-item p-top-voice__item">
                                    <a href="voice/detail/" class="c-voice-item__link p-top-voice__link u-p">
                                        <span class="c-voice-item__number u-en">(01)</span>
                                        <div class="c-voice-item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/p-voice__fv.jpg" width="270" height="300"
                                                alt="">
                                        </div>

                                        <p class="c-voice-item__company">株式会社桐嶋製作所 K・O様</p>
                                        <p class="c-voice-item__text">数字のプロ。言われたことだけじゃなく、提案までしてくれるのでいつも助かります</p>
                                    </a>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="c-voice-item p-top-voice__item">
                                    <a href="voice/detail/" class="c-voice-item__link p-top-voice__link u-p">
                                        <span class="c-voice-item__number u-en">(02)</span>
                                        <div class="c-voice-item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/p-voice__fv.jpg" width="270" height="300"
                                                alt="">
                                        </div>

                                        <p class="c-voice-item__company">会社名が入ります</p>
                                        <p class="c-voice-item__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                    </a>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="c-voice-item p-top-voice__item">
                                    <a href="voice/detail/" class="c-voice-item__link p-top-voice__link u-p">
                                        <span class="c-voice-item__number u-en">(03)</span>
                                        <div class="c-voice-item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice/p-voice__fv.jpg" width="270" height="300"
                                                alt="">
                                        </div>

                                        <p class="c-voice-item__company">会社名が入ります</p>
                                        <p class="c-voice-item__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                    </a>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <a class="c-btn-default__wrapper p-top-voice__btn-wrapper" href="voice/">
                <span class="c-btn-default__border"></span>
                <span class="c-btn-default__text-wrapper">
                    <span class="c-btn-default__text">お客様の声一覧を見る</span>
                    <span class="c-btn-default__text">お客様の声一覧を見る</span>
                </span>
            </a>
        </div>
    </section>

    <!--======================  news  ======================-->
    <?php if (have_posts()) : ?>
        <section class="p-top-news">
            <div class="p-top-news__inner">
                <div class="c-title__wrapper p-top-news__title-wrapper">
                    <h2 class="c-title-ja p-top-news__title-ja">お知らせ</h2>
                    <p class="c-title-en p-top-news__title-en u-en">news</p>
                </div>

                <div class="p-top-news__content">
                    <ol class="p-top-news__list">

                        <?php while (have_posts()) : the_post(); ?>
                            <li class="p-top-news__item">
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

                    <a class="c-btn-default__wrapper p-top-news__btn-wrapper" href="news/">
                        <span class="c-btn-default__border"></span>
                        <span class="c-btn-default__text-wrapper">
                            <span class="c-btn-default__text">お知らせ一覧を見る</span>
                            <span class="c-btn-default__text">お知らせ一覧を見る</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>