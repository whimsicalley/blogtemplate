<?php get_header(); ?>

    <!-- Begin Section Container -->
    <section class="row">
        <div class="eight columns">
            <div class="row">
            <!-- Begin Loop -->
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <div class="row">
                        <div class="three columns index-thumbnail">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                            } ?>
                        </div>
                        <div class="nine columns">
                            <h3 class="header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    <?php
                } //end while
            } //end if
            ?>
            <!-- End Loop -->
            </div>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('first-index-widget'); ?>
        </div>
    </section>
    <!-- End Section Container -->

<?php get_footer(); ?>
