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
				'slug' => 'top-post-list/',
			),
			'public' => true,
			'support' => array (
				'title',
				'thumbnail',
				'editor'
			)
		);
		register_post_type('mg-top-post-list',$arg);
	}	

}

add_action('init', function() {
	new MG_Top_Post_List();
});

?>