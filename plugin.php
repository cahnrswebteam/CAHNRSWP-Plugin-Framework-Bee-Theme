<?php

/*
Plugin Name: CAHNRS Bee Theme Customizations
Plugin URI: http://cahnrs.wsu.edu/communications
Description: Modifies CAHNRS Bee Theme
Author: cahnrscommunications, Danial Bleile
Author URI: http://cahnrs.wsu.edu/communications
Version: 0.0.1
*/

class CAHNRSWP_Plugin_Framework_Bee_Theme {
	
	
	public static $instance;
	
	
	public static function get_instance(){
		 
		 if ( null == self::$instance ) {
			 
            self::$instance = new self;
			
			self::$instance->init_plugin();
			
        } // end if
 
        return self::$instance;
		 
	 } // end get_instance
	 
	 
	 public function init_plugin(){
		 
		 add_action( 'wp_enqueue_scripts' , array( $this , 'enqueue_public_scripts' ), 99 );
		 
		 add_filter( 'cahnrs_framework_header_logo_html' , array( $this , 'filter_logo' ) );
		 
		 add_filter( 'cahnrs_framework_featured_image_replace_html' , array( $this , 'featured_image_replace_html' ) );
		 
	 } // end init_plugin
	 
	 
	 public function enqueue_public_scripts(){
		 
		 wp_enqueue_style( 'bees-theme-public-css' , plugin_dir_url( __FILE__ ) . 'css/style.css' , array(), '0.0.1' );
		 
	 } // end enqueue_public_scripts
	 
	 
	 public function filter_logo( $html ){
		 
		 $html = '<a href="#" class="primary-logo text">';
				
			$html .= 'WSU Honey Bees + Pollinators';
		
		$html .= '</a>';
		
		return $html;
		 
	 } // end filter_logo
	 
	 
	 public function featured_image_replace_html( $html ){
		 
		 if ( is_front_page() ){
			 
			 ob_start();
			 
			 include 'parts/featured-content.php';
			 
			 return ob_get_clean();
			 
		 } else {
			 
			 return $html;
			 
		 } // end if
		 
	 } // end featured_image_replace_html
	 
	
	
}



$cahnrswp_bee_theme = CAHNRSWP_Plugin_Framework_Bee_Theme::get_instance();