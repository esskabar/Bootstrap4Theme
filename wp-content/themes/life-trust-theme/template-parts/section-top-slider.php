<section class="top-slider" <?php if (get_sub_field('anchor')): ?>
    id="<?php the_sub_field('anchor'); ?>"
<?php endif; ?>>

    <?php if (get_sub_field('title')): ?>
        <h2 class="title text-center">
            <?php the_sub_field('title'); ?>
        </h2>
    <?php endif; ?>

    <?php if (get_sub_field('description')): ?>
        <div class="text-center"><?php the_sub_field('description'); ?></div>
    <?php endif; ?>

    <?php if (have_rows('sliders')): while (have_rows('sliders')): the_row();
        $image = get_sub_field('background_image')['sizes']['full_hd']; ?>
        <div class="item" style="background-image:url('<?php echo $image; ?>')">
            <div class="container">

                <?php if (get_sub_field('title')): ?>
                    <h1 class="title display-3">
                        <?php the_sub_field('title'); ?>
                    </h1>
                <?php endif; ?>

            </div>
        </div>
    <?php endwhile; endif; ?>
</section>
