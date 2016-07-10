<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns full-page-posts page-container">
            <!-- Begin Loop -->
            <?php
                if ( have_posts() ) {
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
<!-- End Section Container -->

<?php get_footer(); ?>
