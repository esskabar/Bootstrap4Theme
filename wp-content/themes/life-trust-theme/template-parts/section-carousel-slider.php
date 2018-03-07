<?php $carousel = mt_rand(); ?>
<section class="carousel-slider"<?php if (get_sub_field('anchor')): ?>
    id="<?php the_sub_field('anchor'); ?>"
<?php endif; ?>>

    <div class="headline pt-4">
        <h2><?php the_sub_field('slider-title'); ?></h2>
        <div class="text-center text-secondary"><em><?php the_sub_field('slider-description'); ?></em></div>
    </div>
    <?php if (have_rows('carousel-slider')): ?>

    <div class="slider">
        <?php while (have_rows('carousel-slider')):
            the_row(); ?>

            <?php $image = get_sub_field('image')['sizes']['full_hd']; ?>

            <?php $collapse = mt_rand(); ?>


            <div class="item" style="background-image: url('<?php echo $image; ?>')">

                <div class="container">

                    <div class="card">
                        <div class="card-header text-center"><?php the_sub_field('title'); ?></div>
                        <div class="card-body">
                            <div class="card-text excerpt"><?php the_sub_field('excerpt'); ?></div>
                            <div class="card-text content collapse"
                                 id="collapse-<?php echo $collapse; ?>"><?php the_sub_field('content'); ?></div>
                        </div>
                        <div class="card-footer text-center">
<!--                            <button class="btn btn-secondary btn-sm" type="button" data-toggle="collapse"-->
<!--                                    data-target="#collapse---><?php //echo $collapse; ?><!--" aria-expanded="false"-->
<!--                                    aria-controls="collapse---><?php //echo $collapse; ?><!--">-->
<!--                                Weiterlesen-->
<!--                            </button>-->
                                <?php $link = get_sub_field('link_to_post');?>
                                <a href="<?php echo $link;?>" class="btn btn-secondary btn-sm" type="button">Weiterlesen</a>

                        </div>
                    </div>

                </div>

            </div>


        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>