<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="row">
    <div class="nine columns archive-container contentcontainer">
        <?php if( have_posts() ) :?>
            <h1 class="special"><?php printf(
                __('Search Results for: %s'),
                '<span>' . get_search_query() . '</span>' );
            ?></h1>
            <?php
            while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            endwhile;
            else : ?>
                <h1>Nothing Found</h1>
                <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>
    </div>

    <div class="three columns sidebar">
        <h2 class="sidebar-title">Welcome!</h2>
        <?php dynamic_sidebar('first-index-widget'); ?>
    </div>
</div>

<?php get_footer(); ?>
