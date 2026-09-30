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