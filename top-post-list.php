<?php 
    /*
    Plugin Name: Top Post List
    Plugin URI: https://github.com/ark4n01d/wp-top-post-list
    Description: Plugin for managing Top Post List
    Author: Mark Anthony Gabua
    Version: 1.0
    Author URI: http://www.markanthonygabua.com
    */

class MG_Top_Post_List {

	public function __construct ()
	{
		$this->register_post_type();
		$this->taxonomies();
	}
	public function register_post_type()
	{
		$arg = array(
			'labels' => array(
				'name' => 'Top Post List',
				'singular_name' => 'Top Post List',
				'add_new' => 'Add New Top Post List',
				'add_new_item' => 'Add New Top Post List',
				'edit_item' => 'Edit Item',
				'new_item' => 'Add New Item',
				'view_item' => 'View Top Post List',
				'search_items' => 'Search Top Post List',
				'not_found' => 'No Top Post List Found',
				'not_found_in_trash' => 'No Top Post List Found in Trash'
			),
			'query_var' => 'toppost',
			'rewrite' => array (
				'slug' => 'top-post-list',
			),
			'public' => true,
			'supports' => array (
				'title',				
				'editor',
				'thumbnail'				
			)
		);
		register_post_type('mg-top-post-list',$arg);
		
	}	
	public function taxonomies()
	{
	
		$labels = array(
				'name' => 'Top List',
				'singular_name' => 'Top List',
				'edit_item' => 'Edit Item',
				'update_item' => 'Update Item',
				'add_new_item' => 'Add Item',
				'new_item_name' => 'Add New Item',
				'all_items' => 'All Items',
				'search_items' => 'Search Item',
				'popular_items' => 'Search Item',
				'separate_item_with_comments' => 'Separate items with commas',
				'add_or_remove_items' => 'Add or remove item',
				'choose_from_most_used' => 'Choose from most used'			
		);
		
		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var' => 'top_list',
			);
		register_taxonomy('top_list', array('mg-top-post-list'), $args);
		
	}
	

}

add_action('init', function() {
	new MG_Top_Post_List();
});

?>