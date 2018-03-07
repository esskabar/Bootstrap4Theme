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

        <?php if (have_rows('employees')): ?>

            <div class="row justify-content-sm-center">
                <?php while (have_rows('employees')): the_row(); ?>

                    <?php $image = get_sub_field('image')['sizes']['medium']; ?>
                    <?php $collapse = mt_rand(); ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-5 employee">
                            <img class="card-img-top" src="<?php echo $image; ?>">

                            <div class="card-body">

                                <button class="btn btn-primary btn-lg btn-block" type="button" data-toggle="collapse"
                                        data-target="#collapse-<?php echo $collapse; ?>" aria-expanded="false"
                                        aria-controls="collapse-<?php echo $collapse; ?>">
                                    <?php the_sub_field('name'); ?>
                                </button>
                                <div class=" collapse"
                                     id="collapse-<?php echo $collapse; ?>">

                                    <div class="mt-4 pt-4" style="max-height:70vh">
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>