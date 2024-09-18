<?php

namespace SaaSPrimeEssentialApp\Inc;

/**
 * Admin Related hook.
 */
class SaaSPrime_Essentail_Admin
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function __construct(){ 	
    add_action( 'wp_ajax_wdb_admin_get_cache_cpt', [$this,'saasprime_admin_get_custom_post_types'] );
	}

	
	/**
	 * Hide elementor widget from editor pabel for blog builder post type 
	 * @return
	 */
	function elementor_widget_hide( $settings ){	
	
		if(isset($settings['initial_document']['widgets'])){
			$settings['initial_document']['widgets']['wdb--theme-post-content']['show_in_panel'] = false;
			$settings['initial_document']['widgets']['wdb--theme-post-content']['hide_on_search'] = false;
			$settings['initial_document']['widgets']['wdb--blog--post--excerpt']['show_in_panel'] = false;
			$settings['initial_document']['widgets']['wdb--blog--post--excerpt']['hide_on_search'] = false;
			if(\Elementor\Plugin::$instance->editor->is_edit_mode() && isset($_GET['post'])){
				if(get_post_type($_GET['post']) == 'wdb-single-post'){
					$settings['initial_document']['widgets']['wdb--theme-post-content']['show_in_panel'] = true;
					$settings['initial_document']['widgets']['wdb--theme-post-content']['hide_on_search'] = false;
					$settings['initial_document']['widgets']['wdb--blog--post--excerpt']['show_in_panel'] = true;
					$settings['initial_document']['widgets']['wdb--blog--post--excerpt']['hide_on_search'] = false;
				}			
			}
		}
		
		return $settings;
	}
	
	function saasprime_admin_get_custom_post_types(){
	
		if ( !wp_verify_nonce( $_REQUEST['nonce'], "wdb_theme_secure")) {
			exit("No naughty business please");
		}
		saasprime_get_cache_tax_types();
		saasprime_get_cache_post_types();
	    $array_result = array(
            'status' => esc_html__('Cache post type and taxonomy','saasprime-essential'),
        ); 
        wp_send_json($array_result);	 
	}
	
}

new SaaSPrime_Essentail_Admin();