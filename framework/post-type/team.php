<?php // Register Custom Post Type
function Team_post_type() {

	$labels = array(

		'name'                  => _x( 'Team', 'affsquare', ),
		'singular_name'         => _x( 'Team', 'affsquare', ),
		'menu_name'             => __( 'Team', 'affsquare' ),
		'name_admin_bar'        => __( 'Team', 'affsquare' ),
		'archives'              => __( 'Item Archives Team', 'affsquare' ),
		'attributes'            => __( 'Item Attributes', 'affsquare' ),
		'parent_item_colon'     => __( 'Parent Team:', 'affsquare' ),
		'all_items'             => __( 'All Team', 'affsquare' ),
		'add_new_item'          => __( 'Add New Team', 'affsquare' ),
		'add_new'               => __( 'Add New Team', 'affsquare' ),
		'new_item'              => __( 'New Team', 'affsquare' ),
		'edit_item'             => __( 'Edit Team', 'affsquare' ),
		'update_item'           => __( 'Update Team', 'affsquare' ),
		'view_item'             => __( 'View Team', 'affsquare' ),
		'view_items'            => __( 'View Team', 'affsquare' ),
		'search_items'          => __( 'Search Team', 'affsquare' ),
		'not_found'             => __( 'Not found any Team', 'affsquare' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'affsquare' ),
		'featured_image'        => __( 'Featured Image', 'affsquare' ),
		'set_featured_image'    => __( 'Set featured image', 'affsquare' ),
		'remove_featured_image' => __( 'Remove featured image', 'affsquare' ),
		'use_featured_image'    => __( 'Use as featured image', 'affsquare' ),
		'insert_into_item'      => __( 'Insert into item', 'affsquare' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'affsquare' ),
		'items_list'            => __( 'Items list', 'affsquare' ),
		'items_list_navigation' => __( 'Items list navigation', 'affsquare' ),
		'filter_items_list'     => __( 'Filter items list', 'affsquare' ),
	);
	$args = array(
		'label'                 => __( 'team', 'affsquare' ),
		'description'           => __( 'Team section', 'affsquare' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt'),
		'show_in_rest' => true,
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon' 			=> 'dashicons-cover-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		// 'taxonomies'          => array( 'Team_category','cooking_type' ),
	);
  register_post_type( 'team', $args );
  
}
add_action( 'init', 'Team_post_type', 0 );

