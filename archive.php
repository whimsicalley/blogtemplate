<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
    <div class="twelve columns full-page-posts">
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
</div>

<div class="row">
    <div class="twelve columns full-page-posts">
        <h2>Archives by Month:</h2>
    <ul>
        <?php wp_get_archives('type=weekly'); ?>
    </ul>
    <h2>Archives by Category:</h2>
    <ul>
        <?php wp_list_categories(); ?>
    </ul>
    </div>
</div>

<?php get_footer(); ?>
