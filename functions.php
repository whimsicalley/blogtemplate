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

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );


?>
