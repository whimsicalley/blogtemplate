<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*-- Index Sidebar Widget --*/
    register_sidebar( array(
        'name' => ('First Index Widget'),
        'id' => 'first-index-widget',
        'description' => 'Widget for our index sidebar',
        'before_widget' => '<div class="widget-index-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    /*-- Footer Left Widget --*/
    register_sidebar( array(
        'name' => ('Footer Left Widget'),
        'id' => 'footer-left-widget',
        'description' => 'Left widget for our footer',
        'before_widget' => '<div class="widget-footer-left">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    /*-- Footer Right Widget --*/
    register_sidebar( array(
        'name' => ('Footer Right Widget'),
        'id' => 'footer-right-widget',
        'description' => 'Right widget for our footer',
        'before_widget' => '<div class="widget-footer-right">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*------ Enable Post Image Thumbnails ------*/
add_theme_support( 'post-thumbnails' );

/*-------------- Change Excerpt Length --------------- */

function new_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

/*-------------- Custom Post: Links--------------- */
function custom_web_resources() {
    $labels = array(
        /*--- Begin Labels Options ---*/
        'name'               => _x( 'Links', 'post type general name' ),
        'singular_name'      => _x( 'Link', 'post type singular name' ),
        'add_new'            => _x( 'Add New', weblink ),
        'add_new_item'       => __( 'Add Link' ),
        'edit_item'          => __( 'Edit Links' ),
        'new_item'           => __( 'New Link' ),
        'all_items'          => __( 'All Links' ),
        'view_item'          => __( 'View Links' ),
        'search_items'       => __( 'Search Links' ),
        'not_found'          => __( 'No links found' ),
        'not_found_in_trash' => __( 'No links found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Web Links'
    );
    $args = array(
        /*--- Begin Arguments Options ---*/
        'labels'        => $labels,
        'description'   => 'Place to put useful links to other web resources',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive'   => true,
    );
    register_post_type('links', $args);
}
add_action ('init', 'custom_web_resources');

?>
