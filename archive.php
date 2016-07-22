<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
    <div class="nine columns full-page-posts archive-container">

        <!-- Search Results below -->
        <div class="row">
            <h2>Archives</h2>
            <?php if ( have_posts() ) :
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
                <?php the_excerpt(); ?>
                <?php endwhile; ?> <!-- End Loop -->
                <?php else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>

        <!-- Displays no matter what -->
        <h3>Archives by Month:</h3>
        <ul>
            <?php wp_get_archives('type=weekly'); ?>
        </ul>
        <h3>Archives by Category:</h3>
        <ul>
            <?php wp_list_categories(); ?>
        </ul>
    </div>
    <div class="three columns sidebar">
        <h2 class="sidebar-title">Welcome!</h2>
        <?php dynamic_sidebar('first-index-widget'); ?>
    </div>
</div>

<?php get_footer(); ?>
