<?php


// include custom jQuery
function shapeSpace_include_custom_jquery() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

function global_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/build/css/style.min.css', array());
    wp_enqueue_script('vendor', get_template_directory_uri() . '/build/js/vendors.min.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/build/js/custom.min.js', array('vendor'));

}
add_action('wp_enqueue_scripts', 'global_scripts');


function remove_head_scripts()
{
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    remove_action('wp_head', 'wp_print_styles', 99);
    remove_action('wp_head', 'wp_enqueue_style', 99);


    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_head', 'wp_print_styles', 30);
    add_action('wp_head', 'wp_enqueue_style', 30);
}

add_action('wp_enqueue_scripts', 'remove_head_scripts');


show_admin_bar(false);


add_theme_support('menus');


add_theme_support('post-thumbnails');


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Theme Settings');
}


add_image_size('full_hd', 1920, 1080);
add_image_size('thumb-img', 600, 400);
add_image_size('related-img', 255, 167);
