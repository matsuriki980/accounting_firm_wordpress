<?php get_header(); ?>

<!-- ===================== headerを読み込む ===================== -->
<?php get_template_part("template-parts/header"); ?>

<!-- ===================== hamburger-menuを読み込む ===================== -->
<?php get_template_part("template-parts/hamburger-menu"); ?>

<main>
    <section class="p-404">
        <div class="l-inner p-404__inner">

            <h1 class="p-404__title u-en js-header-bg-trigger">404 Not Found</h1>

            <h2 class="c-lead p-404__lead">
                <span>お探しのページが見つかりませんでした。</span>
                <span>お探しのページは、移動または削除された可能性があります。</span>
                <span>お手数ですがURLをご確認の上、上記メニューなどからお探しください。</span>
            </h2>

            <a href="<?php echo home_url(); ?>" class="c-btn-large">
                トップへ戻る
            </a>
        </div>
    </section>
</main>

<!-- ===================== footerを読み込む ===================== -->
<?php get_template_part("template-parts/footer"); ?>

<?php get_footer(); ?>