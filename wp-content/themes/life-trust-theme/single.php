<?php get_header(); ?>

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right post-page">
            <div class="col-lg-9 col-md-12 left_side">
                <?php if (have_posts()): while (have_posts()):
                the_post();
                $page = get_post($post->ID, ARRAY_A);
                $thumb_url = get_the_post_thumbnail_url($post->ID, 'thumb-img');
                ?>


                <h1><?php the_title() ?></h1>
                <div class="post-thumb" style="background-image: url('<?php echo $thumb_url; ?>')"></div>
                <div class="content_post"><?php the_content(); ?></div>
                <?php //include_once 'template-parts/related-post.php'; ?>
                <?php wp_reset_query();?>
                <div class="wrapper-related-posts">

                    <div class="wrapper_related_post_section">
                        <h3><?php the_field('related_post_title', 'options')?></h3>
                        <div class="row">

                            <?php
                            $post = get_the_ID();

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'post__not_in' => array($post),
                                'post_status' => 'publish'
                            );

                            $my_query = new wp_query($args);

                            if ( $my_query->have_posts() ){
                                while ( $my_query->have_posts() ){ $my_query->the_post();?>
                                    <?php $post_thumbnail_id = get_post_thumbnail_id($post->ID); ?>
                                    <?php $thumb_url = wp_get_attachment_image_src( $post_thumbnail_id, 'related-img' );?>
                                    <?php $post_thumbnail_url = wp_get_attachment_thumb_url($thumb_url); ?>

                                    <div class="col-md-4">

                                        <a href="<? the_permalink() ?>" class="list-group-item" style="background-image:url('<?php echo $thumb_url[0] ?>')">
                                            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
                                        </a>
                                        <h5 class="title"><a href="<?php the_permalink()?>" class="title_link"><?php the_title()?></a></h5>
                                    </div>

                               <?php }

                            }
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>

                </div>
            </div>
            <?php endwhile;
            endif; ?>
            <?php get_sidebar(); ?>
        </div>
    </div>


<?php get_footer(); ?>