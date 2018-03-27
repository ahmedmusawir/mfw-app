<?php

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

/**
 *
 * Adding Custom Customer Item post type
 *
 */
 /**
   * Register a Customer Item post type, with REST API support
   *
   * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
   */
  add_action( 'init', 'my_Customer_cpt' );
  function my_Customer_cpt() {
  	$labels = array(
  		'name'               => _x( 'Customers', 'post type general name', 'moose-framework' ),
  		'singular_name'      => _x( 'Customer Detail', 'post type singular name', 'moose-framework' ),
  		'menu_name'          => _x( 'Customers', 'admin menu', 'moose-framework' ),
  		'name_admin_bar'     => _x( 'Customer Detail', 'add new on admin bar', 'moose-framework' ),
  		'add_new'            => _x( 'Add New', 'Customer Detail', 'moose-framework' ),
  		'add_new_item'       => __( 'Add New Customer Detail', 'moose-framework' ),
  		'new_item'           => __( 'New Customer Detail', 'moose-framework' ),
  		'edit_item'          => __( 'Edit Customer Detail', 'moose-framework' ),
  		'view_item'          => __( 'View Customer Detail', 'moose-framework' ),
  		'all_items'          => __( 'All Customers', 'moose-framework' ),
  		'search_items'       => __( 'Search Customer', 'moose-framework' ),
  		'parent_item_colon'  => __( 'Parent Customer:', 'moose-framework' ),
  		'not_found'          => __( 'No Customer found.', 'moose-framework' ),
  		'not_found_in_trash' => __( 'No Customer found in Trash.', 'moose-framework' )
  	);
  
  	$args = array(
  		'labels'             => $labels,
  		'description'        => __( 'Description.', 'moose-framework' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'customer', 'with_front' => true ),
  		'capability_type'    => 'post',
  		'has_archive'        => true,
  		'hierarchical'       => false,
  		'menu_position'      => null,
  		'show_in_rest'       => true,
  		'rest_base'          => 'customer',
  		'rest_controller_class' => 'WP_REST_Posts_Controller',
  		'supports'           => array( 'title', 'author', 'thumbnail' )
  	);
  
  	register_post_type( 'customer', $args );
}


add_action( 'init', 'create_customer_item_taxonomies', 0 );

// create two taxonomies, Product Types and writers for the post type "book"
function create_customer_item_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Customer Types', 'taxonomy general name', 'moose-framework' ),
    'singular_name'     => _x( 'Customer Type', 'taxonomy singular name', 'moose-framework' ),
    'search_items'      => __( 'Search Customer  Type', 'moose-framework' ),
    'all_items'         => __( 'All Customer Types', 'moose-framework' ),
    'parent_item'       => __( 'Parent Customer Type', 'moose-framework' ),
    'parent_item_colon' => __( 'Parent Customer Type:', 'moose-framework' ),
    'edit_item'         => __( 'Edit Customer Type', 'moose-framework' ),
    'update_item'       => __( 'Update Customer Type', 'moose-framework' ),
    'add_new_item'      => __( 'Add New Customer Type', 'moose-framework' ),
    'new_item_name'     => __( 'New Customer Type Name', 'moose-framework' ),
    'menu_name'         => __( 'Customer Types', 'moose-framework' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_in_rest'      => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'customer-type' ),
  );

  register_taxonomy( 'customer-type', array( 'customer' ), $args );
 
}