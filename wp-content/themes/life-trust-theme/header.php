<!doctype html>
<html lang="ru-en" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    <!--[if lte IE 9 ]>
    <script>
        alert('Browser version is too old and site will not be displayed correctly. Please, upgrade your browser.');
    </script>
    <![endif]-->

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

    <?php $image = get_field('logo','option')['sizes']['medium']; ?>
    <a href="/"><img class="logo" src="<?php echo $image; ?>" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
        <?php wp_nav_menu(array(
            'menu' => 'mainmenu',
            'menu_class' => 'navbar-nav',
            'container' => false
        )); ?>
    </div>

</nav>