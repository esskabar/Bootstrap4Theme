<?php if (get_sub_field('style')):
    $style_val = get_sub_field('style');

    if ($style_val == 'secondary') {
        $card_style = 'card-secondary';
        $btn_style = 'btn-secondary';
    } else if ($style_val == 'primary') {
        $card_style = 'card-inverse card-primary';
        $btn_style = 'btn-outline-primary';
    } else if ($style_val == 'success') {
        $card_style = 'card-inverse card-success';
        $btn_style = 'btn-outline-success';
    } else if ($style_val == 'info') {
        $card_style = 'card-inverse card-info';
        $btn_style = 'btn-outline-info';
    } else if ($style_val == 'warning') {
        $card_style = 'card-inverse card-warning';
        $btn_style = 'btn-outline-warning';
    } else if ($style_val == 'danger') {
        $card_style = 'card-inverse card-danger';
        $btn_style = 'btn-outline-danger';
    }

endif; ?>


<section <?php if (get_sub_field('anchor')): ?>
    id="<?php the_sub_field('anchor'); ?>"
<?php endif; ?> <?php if (get_sub_field('background-color')): ?>
    style="background-color:<?php the_sub_field('background-color'); ?>"
<?php endif; ?>>
    <div class="container pt-5 pb-5">

        <?php if (get_sub_field('title')): ?>
            <h2 class="title text-center<?php echo ' text-' . $style_val; ?>">
                <?php the_sub_field('title'); ?>
            </h2>
        <?php endif; ?>

        <?php if (get_sub_field('description')): ?>
            <div class="text-center text-secondary"><em><?php the_sub_field('description'); ?></em></div>
        <?php endif; ?>

        <?php if (have_rows('collapses')): ?>

            <div class="row justify-content-sm-center collapses">

                <?php $count = count(get_sub_field('collapses')); ?>

                <?php while (have_rows('collapses')): the_row(); ?>

                    <?php $collapse = mt_rand(); ?>

                    <div class="col-lg-4 col-md-6">

                        <?php if (get_sub_field('image')): $image = get_sub_field('image')['sizes']['thumbnail']; ?>

                            <img src="<?php echo $image; ?>" alt="" class="mb-1 mx-auto d-block rounded-circle">

                        <?php endif; ?>

                        <div class="card mb-5 <?php echo $card_style; ?>">
                            <div class="card-header text-center"><?php the_sub_field('title'); ?></div>
                            <div class="card-body">
                                <div class="card-text excerpt">
                                    <div class="inner"><?php the_sub_field('excerpt'); ?></div>
                                </div>
                                <div class="card-text content collapse"
                                     id="collapse-<?php echo $collapse; ?>"><?php the_sub_field('content'); ?></div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-sm <?php echo $btn_style; ?>" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapse-<?php echo $collapse; ?>" aria-expanded="false"
                                        aria-controls="collapse-<?php echo $collapse; ?>">
                                    Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>