<section <?php if (get_sub_field('anchor')): ?>
    id="<?php the_sub_field('anchor'); ?>"
<?php endif; ?> <?php if (get_sub_field('background-color')): ?>
    style="background-color:<?php the_sub_field('background-color'); ?>"
<?php endif; ?>>
    <div class="container pt-5 pb-5">

        <?php if (get_sub_field('title')): ?>
            <h2 class="title text-center">
                <?php the_sub_field('title'); ?>
            </h2>
        <?php endif; ?>

        <?php if (get_sub_field('description')): ?>
            <div class="text-center text-secondary"><em><?php the_sub_field('description'); ?></em></div>
        <?php endif; ?>

        <?php if (have_rows('callouts')): while (have_rows('callouts')): the_row(); ?>

            <?php if (get_sub_field('intro_text')): ?>
                <?php the_sub_field('intro_text'); ?>
            <?php endif; ?>

            <div class="bd-callout bd-callout-<?php the_sub_field('style'); ?> mb-5">
                <?php the_sub_field('content'); ?>
            </div>

        <?php endwhile; endif; ?>
    </div>
</section>  