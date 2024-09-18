<?php
namespace SaaSPrimeEssentialApp\Importer;

/**
 * demo import.
 */
class Wdb_Theme_Demos
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function __construct()
	{
       
       add_action( 'fw:ext:backups:tasks:success', [$this,'success'] );
       
        if( !saasprime_theme_service_pass() ){
            return;
        }
       
       add_filter( 'fw:ext:backups-demo:demos', [$this,'backups_demos'] );     
 	}
	
    function backups_demos( $demos ) {
        
        $demo_content_installer	 = 'https://api.keystonethemes.com/demos/saasprime/';
        
        $demos_array			 = array(
        
            'main-demo' => array(
                'title'        => esc_html__( 'SaaS', 'main-demo' ),
                'category'     => [ 'SaaS', 'Tech' ],
                'screenshot'   => esc_url( $demo_content_installer ) . 'main/screenshot.jpg',
                'preview_link' => esc_url( 'https://saasprime.keystonedemo.com/saas' ),
            ),

            'tech-startup' => array(
                'title'        => esc_html__( 'Tech Startup', 'tech-startup' ),
                'category'     => [ 'Tech Startup', 'Agency'],
                'screenshot'   => esc_url( $demo_content_installer ) . 'tech-startup/screenshot.jpg',
                'preview_link' => esc_url( 'https://saasprime.keystonedemo.com/tech-startup' ),
            ),

            'marketing-agency' => array(
                'title'        => esc_html__( 'Marketing Agency', 'marketing-agency' ),
                'category'     => [ 'Marketing', 'Agency'],
                'screenshot'   => esc_url( $demo_content_installer ) . 'marketing-agency/screenshot.jpg',
                'preview_link' => esc_url( 'https://saasprime.keystonedemo.com/marketing-agency' ),
            ),

            'web-hosting' => array(
                'title'        => esc_html__( 'Web Hosting', 'web-hosting' ),
                'category'     => [ 'Web Hosting', 'SaaS'],
                'screenshot'   => esc_url( $demo_content_installer ) . 'web-hosting/screenshot.jpg',
                'preview_link' => esc_url( 'https://saasprime.keystonedemo.com/web-hosting' ),
            ),

            'software' => array(
                'title'        => esc_html__( 'Software', 'software' ),
                'category'     => [ 'Software', 'SaaS'],
                'screenshot'   => esc_url( $demo_content_installer ) . 'software/screenshot.jpg',
                'preview_link' => esc_url( 'https://saasprime.keystonedemo.com/software' ),
            ),

            'crm' => array(
                'title'        => esc_html__( 'CRM', 'crm' ),
                'category'     => [ 'CRM', 'SaaS'],
                'screenshot'   => esc_url( $demo_content_installer ) . 'crm/screenshot.jpg',
                'preview_link' => esc_url( 'https://saasprime.keystonedemo.com/crm' ),
            ),
            
        );

        $download_url = esc_url( $demo_content_installer ) . '/download-script.php';
        try {
            foreach ( $demos_array as $id => $data ) {
                $demo		 = new \FW_Ext_Backups_Demo( $id, 'piecemeal', array(
                    'url'		 => $download_url,
                    'file_id'	 => $id,
                ) );
                $category = isset($data[ 'category' ]) ? $data[ 'category' ] : [];
                $demo->set_title( $data[ 'title' ] );
                $demo->set_screenshot( $data[ 'screenshot' ] );
                $demo->set_preview_link( $data[ 'preview_link' ] );
                $demo->set_category( $category );
                $demos[ $demo->get_id() ]	 = $demo;
                unset( $demo );
            }
        } catch (\Exception $e) {
            
        }  
        

        return $demos;
    }
    
    public function success(){
       
        foreach($this->_metas as $key) {
            $value = get_user_meta(1, $key, true);
            update_option( $key, $value );
        }
    }

}

new Wdb_Theme_Demos();




