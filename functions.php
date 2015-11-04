<?php
/**
 * Alejandro theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @package Alejandro theme
 * @since 1.0
 */

/**
 * Register widget area.
 */
function alejandro_widgets_init() {

	register_post_type( 'picture', array(
	  'labels' => array(
	    'name' => 'Pictures',
	    'singular_name' => 'Picture',
	   ),
	  'description' => 'Paintings from Aobregon Obregón',
	  'public' => true,
	  'menu_position' => 20,
	  'supports' => array( 'title', 'editor' )
	));

	register_post_type( 'book', array(
	  'labels' => array(
	    'name' => 'Books',
	    'singular_name' => 'Book',
	   ),
	  'description' => 'This are the books that contain Aobregon Obregón work',
	  'public' => true,
	  'menu_position' => 21,
	  'supports' => array( 'title', 'editor' )
	));
}
add_action( 'widgets_init', 'alejandro_widgets_init' );

function remove_menus(){

  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );
