<?php
	if(defined('INFETECH_URL') 	== false) 	define('INFETECH_URL', get_template_directory());
	if(defined('INFETECH_URI') 	== false) 	define('INFETECH_URI', get_template_directory_uri());

	load_theme_textdomain( 'infetech', INFETECH_URL . '/languages' );

	// Main Feature
	require_once( INFETECH_URL.'/inc/class-main.php' );

	// Functions
	require_once( INFETECH_URL.'/inc/functions.php' );

	// Hooks
	require_once( INFETECH_URL.'/inc/class-hook.php' );

	// Widget
	require_once (INFETECH_URL.'/inc/class-widgets.php');
	

	// Elementor
	if (defined('ELEMENTOR_VERSION')) {
		require_once (INFETECH_URL.'/inc/class-elementor.php');
	}
	
	// WooCommerce
	if (class_exists('WooCommerce')) {
		require_once (INFETECH_URL.'/inc/class-woo.php');	
	}
	
	
	/* Customize */
	if( current_user_can('customize') ){
	    require_once INFETECH_URL.'/customize/custom-control/google-font.php';
	    require_once INFETECH_URL.'/customize/custom-control/heading.php';
	    require_once INFETECH_URL.'/inc/class-customize.php';
	}
    
   
	require_once ( INFETECH_URL.'/install-resource/active-plugins.php' );
	
	function enqueue_modal_viewer_script() {
        // Enqueue jQuery (if not already included)
        wp_enqueue_script('jquery');
    
        // Enqueue modal-viewer.js
        wp_enqueue_script(
            'modal-viewer', 
            get_template_directory_uri() . '/assets/js/modal-viewer.js', 
            array('jquery'), // jQuery as a dependency
            null, 
            true // Load in footer
        );

    
}
add_action('wp_enqueue_scripts', 'enqueue_modal_viewer_script');
