<?php 
 

 // Post Page
CSF::createSection( SAASPRIME_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'saasprime-essential' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'saasprime-essential' ),
        ),        
        
        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'saasprime-essential' ),
            'desc'    => esc_html__( 'If you want to enable or disable single post tags you can set ( YES / NO )', 'saasprime-essential' ),
            'default' => true,
        ),

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'saasprime-essential' ),
            'default' => false
        ),
        
        array(
            'id'            => 'blog_post_preset_grp',
            'type'          => 'tabbed',
            'title'         => esc_html__('Preset','saasprime-essential'),
            'tabs'          => array(
              array(
                'title'     => 'Post Single',
                'icon'      => 'fas fa-warehouse',
                'fields'    => array(
                    
                    array(
                        'id'        => 'post_layout',
                        'type'      => 'image_select',
                        'title'     => esc_html__('Layout','saasprime-essential'),
                        'options'   => array(
                          'default' => SAASPRIME_ESSENTIAL_ASSETS_URL . 'images/patterns/default.svg',
                          'health-one' => SAASPRIME_ESSENTIAL_ASSETS_URL . 'images/patterns/layout-1.svg',
                          'athlete' => SAASPRIME_ESSENTIAL_ASSETS_URL . 'images/patterns/layout-2.svg',
                        ),
                        'default'   => 'default',
                    ),
            
                    array(
                        'id'      => 'preset_blog_banner',
                        'type'    => 'switcher',
                        'title'   => esc_html__( 'Banner', 'saasprime-essential' ),
                        'default' => false,
                        'dependency' => array( 'post_layout', 'any', 'health-one,athlete' )
                    ), 
                    
                    array(
                        'id'      => 'preset_blog_view',
                        'type'    => 'switcher',
                        'title'   => esc_html__( 'View', 'saasprime-essential' ),
                        'default' => false,
                        'dependency' => array( 'post_layout', 'any', 'health-one,athlete' )
                    ),
                    
                    array(
                        'id'      => 'preset_blog_sidebar',
                        'type'    => 'switcher',
                        'title'   => esc_html__( 'Sidebar', 'saasprime-essential' ),
                        'default' => false,
                        'dependency' => array( 'post_layout', 'any', 'health-one,athlete' )
                    ),
                    
                    array(
                        'type'     => 'callback',
                        'function' => 'saasprime_elementor_post_single_layout_json',
                        'dependency' => array( 'post_layout', '==', 'elementor_builder' )
                    )
                    
                )
              ),           
            )
          ),
          
          


    ),
) );

