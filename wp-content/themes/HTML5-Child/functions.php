<?php /*

  This file is part of a child theme called HTML5 Child.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read https://codex.wordpress.org/Child_Themes.

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
/*  Add your own functions below this line.
    ======================================== */ 
    function html5blank_styles_make_child_active()
    {
    wp_deregister_style('html5blank');
    }
    add_action('wp_enqueue_scripts', 'html5blank_styles_make_child_active', 100); 
    function html5blank_styles_child()
    {
    wp_register_style('html5blank-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank-child'); 
    }
    add_action('wp_enqueue_scripts', 'html5blank_styles_child'); 
	add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
