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
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

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

function remove_menus(){

  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );
