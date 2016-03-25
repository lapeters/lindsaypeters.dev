<?php

/*
Plugin Name: Custom Menu
Plugin URI: http://lindsaypeters.dev
Description: This outputs a custom menu and some other things I dont yet understand because Dave is mysterious and vague.
Author: Lindsay Peters
Version: 1.0
Author URI: http://lindsaypeter.dev
*/

// register new custom menu
function register_lpeters_menu() {
	register_nav_menus( array(
	'work_menu' => 'My Work Menu'
) );
}
add_action('init', 'register_lpeters_menu');

