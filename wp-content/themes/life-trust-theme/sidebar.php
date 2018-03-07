<div class="col-lg-3 col-md-12  sidebar-offcanvas" id="sidebar">

    <div class="list-group">
        <h3><?php the_field('recent_post_title', 'options')?></h3>
        <?php

        $post = get_the_ID();

        $args=array(
            'post_type' => 'post',
            'post__not_in' => array($post),
            'posts_per_page'=> -1
        );


        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ){		$my_query->the_post();
        ?>

        <a href="<?php the_permalink()?>" class="list-group-item"><?php the_title(); ?></a>

        <?php }
        wp_reset_postdata();
        ?>
    </div>

</div>
