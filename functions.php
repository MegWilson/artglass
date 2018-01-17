<?php

function learningWordpress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningWordpress_resources');

// Navigation Menus
register_nav_menus(array (
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

// Sidebar
register_sidebar( array(
   'name' => __( 'Main Sidebar', 'theme-slug' ),

   'id' => 'change_me',  // Add only this line

   'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
   'before_widget' => '<li id="%1$s" class="widget %2$s">',
   'after_widget'  => '</li>',
   'before_title'  => '<h2 class="widgettitle">',
   'after_title'   => '</h2>',
 ) );

// Get top ancestor
function get_top_ancestor_id() {

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}

	return $post->ID;

}

// Does page have children?
function has_children() {

	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);

}
