<?php 

    // Woo a top-tab
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'id'    => 'wdb_rtl_tab',                     // Set a unique slug-like ID
        'title' => esc_html__( 'RTL', 'saasprime-essential' ),
        'icon'  => 'fas fa-paragraph-rtl',
    ) );

    // Shop
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'wdb_rtl_tab',                        // The slug id of the parent section
        'icon'   => 'fas fa-paragraph-rtl',
        'title'  => esc_html__( 'Settings', 'saasprime-essential' ),
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'RTL Settings', 'saasprime-essential' ),
            ),
        
	        array(
                'id'      => 'wdb_enable_rtl',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable RTL (Frontend)', 'saasprime-essential' ),
                'default' => false,
            ),          

        )
    ) );

