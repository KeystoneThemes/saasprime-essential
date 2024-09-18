<?php 

    include_once(SAASPRIME_ESSENTIAL_DIR_PATH.'inc/sidebar-widgets/recent-post.php');
    include_once(SAASPRIME_ESSENTIAL_DIR_PATH.'inc/sidebar-widgets/social.php');
    include_once(SAASPRIME_ESSENTIAL_DIR_PATH.'inc/sidebar-widgets/cta-banner.php');
    
    add_action( 'widgets_init', 'saasprime_register_sidebar_widgets' );
    
    function saasprime_register_sidebar_widgets() {
    	register_widget( 'SaaSPrime_Recent_Post' );
    	register_widget( 'SaaSPrime_Banner_Widget' );
    }
