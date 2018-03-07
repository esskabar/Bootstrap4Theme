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

        <?php if (have_rows('table')): ?>

            <table class="table table-striped">
                <tbody>
                <?php while (have_rows('table')): the_row(); ?>
                    <tr>
                        <th scope="row"><?php the_sub_field('left'); ?></th>
                        <td><?php the_sub_field('right'); ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>

        <?php endif; ?>
    </div>
</section>     