<?php 
/**
 * Qi Library custom posts
 */

function register_qi_library_types() {
 $labels = array(
 "name" => __('Library types'),
 "singular_name" => __('Type'),
 "menu_name" => __('-- Library types'),
 "all_items" => __('All types'),
 "edit_item" => __('Edit types'),
 "view_item" => __('View types'),
 "update_item" => __('Update types'),
 "add_new_item" => __('Add new type'),
 "new_item_name" => __('Type name'),
 );

 $args = array(
 "label" => __( 'Library types'),
 "labels" => $labels,
 "public" => true,
 "hierarchical" => true,
 "label" => __('Types'),
 "show_ui" => true,
 "show_in_menu" => true,
 "show_in_nav_menus" => true,
 "query_var" => true,
 "show_admin_column" => false,
 "show_in_rest" => true,
 "rest_base" => "",
 "show_in_quick_edit" => false,
 'supports' => array('title', 'editor', 'thumbnail'),
 );
 register_taxonomy("qi_library_types", array("library"), $args);
}

function register_qi_instructors() {
 $labels = array(
 "name" => __('Instructors'),
 "singular_name" => __('Instructor'),
 "menu_name" => __('-- Instructors'),
 "all_items" => __('All instructors'),
 "edit_item" => __('Edit instructors'),
 "view_item" => __('View instructors'),
 "update_item" => __('Update instructors'),
 "add_new_item" => __('Add new instructor'),
 "new_item_name" => __('Instructor name'),
 );

 $args = array(
 "label" => __( 'Instructors'),
 "labels" => $labels,
 "public" => true,
 "hierarchical" => true,
 "label" => __('Instructors'),
 "show_ui" => true,
 "show_in_menu" => true,
 "show_in_nav_menus" => true,
 "query_var" => true,
 "show_admin_column" => false,
 "show_in_rest" => true,
 "rest_base" => "",
 "show_in_quick_edit" => false,
 'supports' => array('title', 'editor', 'thumbnail'),
 );
 register_taxonomy("qi_instructors", array("library"), $args);
}

add_action('init', 'register_qi_library_types');
add_action('init', 'register_qi_instructors');

function register_post_types(){
	register_post_type( 'library', [
		'labels' => [
			'name'               => 'Library posts', 
			'singular_name'      => 'Library post', 
			'add_new'            => 'Add Library post', 
			'add_new_item'       => 'Add Library post', 
			'edit_item'          => 'Edit Library post', 
			'new_item'           => 'New Library post', 
			'view_item'          => 'View Library post', 
			'search_items'       => 'Search Library post', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'menu_name'          => 'Video Library', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_rest'        => true, 
		'rest_base'           => null, 
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-video-alt2',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','author','thumbnail', 'excerpt', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['qi_library_types', 'qi_instructors'],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type( 'events', [
		'labels' => [
			'name'               => 'Events', 
			'singular_name'      => 'Event', 
			'add_new'            => 'Add Event', 
			'add_new_item'       => 'Add Event', 
			'edit_item'          => 'Edit Event', 
			'new_item'           => 'New Event', 
			'view_item'          => 'View Event', 
			'search_items'       => 'Search Event', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'menu_name'          => 'Events', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_rest'        => true, 
		'rest_base'           => null, 
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-buddicons-groups',
		'hierarchical'        => false,
		'show_in_rest' 				=> true, 
		'supports'            => array( 'title', 'editor','author','thumbnail', 'excerpt', 'custom-fields' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => '',
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
		
	]);
}

add_action( 'init', 'register_post_types' );

?>