<section<?php if (get_sub_field('anchor')): ?>
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

        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-8">
                <?php echo do_shortcode('[contact-form-7 id="95" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>