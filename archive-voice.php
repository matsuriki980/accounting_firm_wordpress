<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

<main>

    <!--======================  fv  ======================-->
    <div class="l-fv-sub-page p-voice-fv">
        <div class="l-fv-sub-page__title-wrapper">
            <h1 class="l-fv-sub-page__title-ja">お客様の声</h1>
            <p class="l-fv-sub-page__title-en u-en">
                <span>Customer</span>
                <span>Voice</span>
            </p>
        </div>
    </div>

    <!--======================  content  ======================-->
    <?php if (have_posts()) : ?>
        <section class="p-voice js-header-bg-trigger">

            <!-- SEO対策 見た目は隠す -->
            <h2 class="u-visually-hidden">お客様の声</h2>

            <div class="p-voice__inner">
                <ol class="p-voice__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="p-voice__item">
                            <?php get_template_part("template-parts/voice-item"); ?>
                        </li>
                    <?php endwhile; ?>
                </ol>


                <div class="c-pagination-btn__wrapper">
                    <!-- ===================== pagination-btnを読み込む ===================== -->
                    <?php get_template_part("template-parts/pagination-btn"); ?>
                </div>
            </div>

        </section>
    <?php endif; ?>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>