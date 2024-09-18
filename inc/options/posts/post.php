<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $post_prefix = 'saasprime_post_options';
  
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'post',
    ) );
  
          // Header section
          CSF::createSection( $post_prefix, array(
            'title'  => 'Header',
            'fields' => array(

              array(
                'id'          => 'header_style_override',
                'type'        => 'select',
                'title'       => esc_html__('Override Header','saasprime-essential'),
                'options'     => array(
                  ''  => esc_html__('No option','saasprime-essential'),
                  'theme_header'  => esc_html__('Theme Header','saasprime-essential'),

                ),
                'default'     => ''
              ),
           
              array(
                  'id'      => 'header_style',
                  'type'    => 'image_select',
                  'title'   => esc_html__( 'Header Style', 'saasprime-essential' ),
                  'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'saasprime-essential' ),
                  'options' => array(
                    'style1' => SAASPRIME_ESSENTIAL_ASSETS_URL. '/images/header/header-1.svg',
                   ),
                  'default' => '',
                  'dependency' => array( 'header_style_override', '==', 'theme_header' ),
              ),
                
              array(
                'id'      => 'transparent_header',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Transparent Header', 'saasprime-essential' ),
                'default' => false,
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
              ),

              
              array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Background', 'saasprime-essential' ),
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            
            array(
                'id'      => 'menu_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Background', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the menu background form here.', 'saasprime-essential' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'.single-post .default-blog-header',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            
            array(
                'id'     => 'header-menu-padding',
                'type'   => 'spacing',
                'title'  => esc_html__('Menu Padding','saasprime-essential'),
                'output' => '.single-post .lawyer-header__inner,.single-post .lawyer-header__inner',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
              ),
          
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Color', 'saasprime-essential' ),
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
    
            array(
                'id'      => 'menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Color', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'saasprime-essential' ),
                'default' => '',
                'output'  => '.single-post .default-blog-header .nav-item a,.single-post .logo-title a',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            array(
                'id'      => 'menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Hover Color', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the menu hover color by color picker', 'saasprime-essential' ),
                'default' => '',
               
                'output'  => '.single-post .default-blog-header .nav-item:hover > a',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Dropdown Color & Hover', 'saasprime-essential' ),
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            array(
                'id'      => 'menu_dropdown_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Color', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the menu dropdown color by color picker', 'saasprime-essential' ),
                'default' => '',
                'output'  => '.single-post .default-blog-header .nav-item .dp-menu .nav-item a',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            array(
                'id'      => 'menu_dropdown_hover__text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Color', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'saasprime-essential' ),
                'default' => '',
                'output'  => '.single-post .default-blog-header .nav-item .dp-menu .nav-item:hover a',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            array(
                'id'      => 'menu_dropdown_uibg_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown bgColor', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'saasprime-essential' ),
                'default' => '',
                'output_mode' => 'background',
                'output'  => '.single-post .main-menu ul.dp-menu,.single-post .main-menu ul.dp-menu ul',
                'dependency' => array( 'header_style_override', '==', 'theme_header' ),
            ),
            
            array(
              'type'    => 'heading',
              'content' => esc_html__('Mobile/ Offcanvas','saasprime-essential'),
            ),
          
          array(
          
              'id'      => 'offcanvas_container_image',
              'type'    => 'background',
              'title'   => esc_html__( 'Upload Background', 'saasprime-essential' ),
              'desc'    => esc_html__( 'Upload main Image width 400px and height 100%.', 'saasprime-essential' ),
              'output' => '.offcanvas__area .offcanvas',
              'dependency' => array( 'header_style_override', '==', 'theme_header' ),
          ),
          array(
              'id'     => 'offcanvas_container_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Color', 'saasprime-essential' ),
              'output' => '
              .single-post.light .offcanvas__title,
              .single-post .offcanvas__title,
              .single-post .offcanvas__area .offcanvas ul li a ,
              .single-post .offcanvas__area .offcanvas i,
              .single-post .offcanvas__area .offcanvas p,
              .single-post .offcanvas__area .offcanvas p
              ',
              'output_important' => true,
              'dependency' => array( 'header_style_override', '==', 'theme_header' ),
          ),
          
          array(
              'id'     => 'offcanvas_menu_border_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Menu Border Color', 'saasprime-essential' ),
              'output' => '
              .single-post .offcanvas__menu-wrapper.mean-container .mean-nav > ul > li:last-child > a,
              .single-post .offcanvas__menu-wrapper.mean-container .mean-nav > ul > li > a
              ',
              'output_important' => true,
              'output_mode' => 'border-color',
              'dependency' => array( 'header_style_override', '==', 'theme_header' ),
          ),
      
    
            )
    ) );
    CSF::createSection( $post_prefix, array(
      'title'  => esc_html__('Footer','saasprime-essential'),
      'fields' => array(
          
          array(
            'id'          => 'footer_style_override',
            'type'        => 'select',
            'title'       => esc_html__('Override Footer','saasprime-essential'),            
            'options'     => array(
              ''  => esc_html__('No option','saasprime-essential'),
              'theme_footer'  => esc_html__('Theme Footer','saasprime-essential'),
              'builder_footer'  => esc_html__('Elementor Footer','saasprime-essential'),
            ),
            'default'     => ''
          ),
       
          array(
              'id'      => 'footer_style',
              'type'    => 'image_select',
              'title'   => esc_html__( 'Footer Style', 'saasprime-essential' ),
              'desc'    => esc_html__( 'Select the footer style which you want to show on your website.', 'saasprime-essential' ),
              'options' => array(
                'style2'       => SAASPRIME_ESSENTIAL_ASSETS_URL. '/images/footer/footer_2.svg',
               ),
              'default' => 'style2',
              'dependency' => array( 'footer_style_override', '==', 'theme_footer' ),
          ),

          array(
            'id'          => 'builder_footer',
            'type'        => 'select',
            'title'       => esc_html__('Elementor Footer','saasprime-essential'),            
            'options'     => saasprime_header_footer__custom_ele_type('footer'),
            'default'     => '',
            'dependency'  => array( 'footer_style_override', '==', 'builder_footer' ),
            'after'       => wp_kses_post( $_hf_html ),
          ),           
      )
    ) );
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Layout', 'saasprime-essential'),
      'fields' => array(
      
          array(
              'id'      => 'override_post_layout',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Override Layout', 'saasprime-essential' ),
              'default' => false,
             
          ), 
      
          array(
            'id'        => 'post_layout',
            'type'      => 'image_select',
            'title'     => esc_html__('Layout','saasprime-essential'),
            'options'   => array(
              'default' => SAASPRIME_ESSENTIAL_ASSETS_URL.'images/default-layout.png',
              'health-one' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
              'athlete' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',                               
              'elementor_builder' => SAASPRIME_ESSENTIAL_ASSETS_URL . 'images/elementor.svg'
            ),
            'default'   => '',
            'dependency' => array( 'override_post_layout', '==', true )                       
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
            'id'          => 'wdb-elementor-post-layout-id',
            'type'        => 'select',
            'title'       => 'Select with Layout',
            'placeholder' => 'Select Layout',
            'chosen'      => false,
            'ajax'        => true,
            'multiple'    => false,
            'sortable'    => false,
            'options'     => 'posts',
            'query_args'  => array(
              'post_type' => 'wdb-single-post'
            ),
            'dependency' => array( 'post_layout', '==', 'elementor_builder' )
          ),
  
      )
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Video', 'saasprime-essential'),
      'fields' => array(  
        array(
          'id'    => 'feature_video_id',
          'type'  => 'text',
          'title'  =>  esc_html__( 'Video Url', 'saasprime-essential'),
          'desc'  =>  esc_html__( 'Provide Url here From Youtube', 'saasprime-essential'),
        ),  
      )
    ) );

    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Audio', 'saasprime-essential'),
      'fields' => array(  
            array(
              'id'    => 'feature_audio',
              'type'  => 'text',
              'title'  =>  esc_html__( 'Audio URL', 'saasprime-essential'),
              'desc'  =>  esc_html__( 'Provide SoundCloud audio url', 'saasprime-essential'),
            ),  
      )
    ) );   
  
  
  }
  