<?php

/*
Template Name: Full Width
*/

?>

<?php get_header(); ?>

    <section class="row">
        <div class="twelve columns">
            <!-- Begin Loop -->
            <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();
                    }
                }
            ?>
            <!-- End Loop -->
        </div>
    </section>

<?php get_footer(); ?>
