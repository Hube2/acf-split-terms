<?php 

	/*
		Plugin Name: ACF Split Terms
		Plugin URI: https://github.com/Hube2/acf-split-terms
		Description: Updates ACF fields when WP Splits Terms
		Author: John A. Huebner II
		Author URI: https://github.com/Hube2
		Version: 0.0.1
		
		This plugin must be loctated in the mu-plugin folder so that it is available during WP update
	*/
	
	new acf_split_terms();
	
	class acf_split_terms {
		
		public function __construct() {
			add_action('split_shared_term', array($this, 'split_term'), 10, 4);
		} // end public function __construct
		
		public function split_term($old_term_id, $new_term_id, $term_taxonomy_id, $taxonomy) {
			global $wpdb;
			//echo $wpdb; die;
			$table = $wpdb->get_blog_prefix().'options';
			$old_name = $taxonomy.'_'.$old_term_id;
			$new_name = $taxonomy.'_'.$new_term_id;
			$query = 'UPDATE '.$table.'
								SET option_name = REPLACE(option_name, "'.$old_name.'", "'.$new_name.'")
								WHERE option_name LIKE "%'.str_replace('_', '\_', $old_name).'%"';
			$wpdb->query($query);
		} // end public function split_term
		
	} // end class acf_split_terms
	
?>