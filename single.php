<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns full-page-posts">
            <!-- Begin Loop -->
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        /* OUR DATA CONTEXT IS DEFINED */
                        the_post(); ?>
                            <div class="contentcontainer">
                                <h2><?php the_title(); ?></h2>
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('large'); ?>
                                    </div>
                                <?php }
                                the_content(); ?>
                            </div> <?php
                    }
                }
            ?>
            <!-- End Loop -->
        </div>
    </section>
<!-- End Section Container -->

<?php get_footer(); ?>
