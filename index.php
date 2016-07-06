<?php get_header(); ?>

    <!-- Begin Section Container -->
    <section class="row">
        <!-- Begin Post Column -->
        <div class="nine columns">
            <div class="row">
                <!-- Begin Post Loop -->
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                            <!--Start Individual Post Column-->
                            <div class="four columns post">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                } ?>
                                <h3 class="header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                            <!--End Post Column-->
                            <?php
                        } //end while
                    } //end if
                    ?>
                <!-- End Loop -->
            </div>
        </div>
        <!-- End Post Column -->
        <!-- Begin Sidebar Column-->
        <div class="three columns">
            <?php dynamic_sidebar('first-index-widget'); ?>
        </div>
    </section>
    <!-- End Section Container -->

<?php get_footer(); ?>
