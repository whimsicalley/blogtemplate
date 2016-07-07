<?php get_header(); ?>

    <!-- Begin Section Container -->
    <section class="row">
        <!-- Begin Post Column -->
        <div class="nine columns">
            <div class="row postcontainer">
                <!-- Begin Post Loop -->
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                            <!--Start Individual Post Column-->
                            <div class="four columns post">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                } ?>
                                <h3 class="header">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3></a>
                                    <div class="time">
                                        <?php the_time('F dS, Y'); ?>
                                    </div>
                                    <?php the_excerpt(); ?>
                                <div class="button-container">
                                    <a class="button" href="<?php the_permalink(); ?>">More</a>
                                </div>
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
        <div class="three columns sidebar">
            <h2 class="sidebar-title">Welcome!</h2>
            <?php dynamic_sidebar('first-index-widget'); ?>
        </div>
    </section>
    <!-- End Section Container -->

<?php get_footer(); ?>
