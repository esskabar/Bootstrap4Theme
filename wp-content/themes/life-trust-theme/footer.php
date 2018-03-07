<?php wp_footer(); ?>

<footer class="navbar navbar-dark bg-dark">

    <div class="col-sm-6">
        <?php the_field('copyright', 'options'); ?>
    </div>
    <div class="col-sm-6 text-right">
        <?php wp_nav_menu(array(
            'menu' => 'footermenu',
            'container' => false
        )); ?>
    </div>

</footer>

</body>
</html>