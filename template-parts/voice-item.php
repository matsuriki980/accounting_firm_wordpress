<?php
// function.phpから投稿タイプ[voice]の投稿をすべて取得する関数を呼び出す
$all_posts =  get_post_data_voice();
?>

<article class="c-voice-item">
    <a href="<?php the_permalink(); ?>" class="c-voice-item__link <?php echo is_singular('voice') ? 'p-voice-other__link' : ''; ?> u-p">

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