<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php if (have_rows('page_builder')):
    while (have_rows('page_builder')) : the_row();

        get_template_part( 'template-parts/' . get_row_layout());

    endwhile;
endif; ?>

<?php get_footer(); ?>