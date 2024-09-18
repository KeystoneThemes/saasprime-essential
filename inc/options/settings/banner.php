<?php 
    // Blog
     // footer a top-tab
     CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'id'    => 'banner_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Banner', 'saasprime-essential' ),
        'icon'     => 'fa fa-cog',
    ) );
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content Settings', 'saasprime-essential' ),
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Content Settings', 'saasprime-essential' ),
            ),
        
            array(
                'id'            => 'opt-tabbed-banner',
                'type'          => 'tabbed',
                'title'         => 'Settings',
                'tabs'          => array(
                  array(
                    'title'     => esc_html__('Blog','saasprime-essential'),
                    'icon'      => '',
                    'fields'    => array(
                    
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( 'Blog Banner', 'saasprime-essential' ),
                        ),
                      
                        array(
                            'id'      => 'blog_banner_show',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Blog Banner', 'saasprime-essential' ),
                            'default' => true
                        ),                        
                          
                        array(
                            'id'      => 'blog_elementor_shortcode',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Elementor ShortCode?', 'saasprime-essential' ),
                            'default' => false,
                            'dependency' => array( 'blog_banner_show|blog_banner_show', '==|==', 'true|true' ) 
                        ), 
                        
                        array(
                            'id'            => 'blog_banner_shortcode',
                            'type'          => 'text',
                            'placeholder'   => '[WDB_ELEMENTOR_TPL id="99991951"]',
                            'title'         => esc_html__( 'Shortcode', 'saasprime-essential' ),
                            'dependency'    => array( 'blog_elementor_shortcode|blog_banner_show', '==|==', 'true|true' ) 
                        ),
                        
                        array(
                            'id'      => 'blog_show_breadcrumb',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Blog Breadcrumb', 'saasprime-essential' ),
                            'default' => true,
                            'dependency' => array( 'blog_elementor_shortcode', '==', 'false' ) 
                        ),
                        
                        array(
                            'id'      => 'banner_blog_title',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Blog title', 'saasprime-essential' ),
                            'dependency' => array( 'blog_elementor_shortcode', '==', 'false' ) 
                        ), 
                        
                        array(
            
                            'id'      => 'banner_blog_image',
                            'type'    => 'background',
                            'title'   => esc_html__( 'Upload Background', 'saasprime-essential' ),
                            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'saasprime-essential' ),
                            'output' => '.blog .default-breadcrumb__area',
                            'dependency' => array( 'blog_elementor_shortcode', '==', 'false' ),
                        ),
               
                    )
                  ),
                  array(
                    'title'     => esc_html__('Page','saasprime-essential'),
                    'icon'      => '',
                    'fields'    => array(
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( 'Page Banner', 'saasprime-essential' ),
                        ),
                        
                        array(
            
                            'id'      => 'page_banner_show',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Page Banner Show ', 'saasprime-essential' ),
                            'default' => true
                        ),
                        
                        array(
                            'id'      => 'page_elementor_shortcode',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Elementor ShortCode?', 'saasprime-essential' ),
                            'default' => false,
                            'dependency' => array( 'page_banner_show', '==', 'true' ) 
                        ), 
                        
                        array(
                            'id'            => 'page_banner_shortcode',
                            'type'          => 'text',
                            'placeholder'   => '[WDB_ELEMENTOR_TPL id="99991951"]',
                            'title'         => esc_html__( 'Shortcode', 'saasprime-essential' ),
                            'dependency'    => array( 'page_elementor_shortcode|page_banner_show', '==|==', 'true|true' ) 
                        ),
                        
                        array(
                            'id'      => 'page_show_breadcrumb',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Page Breadcrumb', 'saasprime-essential' ),
                            'default' => true,
                            'dependency'    => array( 'page_elementor_shortcode|page_banner_show', '==|==', 'false|true' ) 
                        ),
                        
                        array(            
                            'id'      => 'banner_page_title',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Page Title', 'saasprime-essential' ),
                            'default' => '',
                            'dependency'    => array( 'page_elementor_shortcode|page_banner_show', '==|==', 'false|true' ) 
                        ), 
            
                        array(            
                            'id'      => 'banner_page_image',
                            'type'    => 'background',
                            'title'   => esc_html__( 'Upload Background', 'saasprime-essential' ),
                            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'saasprime-essential' ),
                            'output' => '.page .default-breadcrumb__area',
                            'dependency'    => array( 'page_elementor_shortcode|page_banner_show', '==|==', 'false|true' ) 
                        ),                       
                       
                      
                    )
                  ),
                  //Search
                  array(
                    'title'     => esc_html__('Search Page','saasprime-essential'),
                    'icon'      => '',
                    'fields'    => array(
                    
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( 'Search Page Banner', 'saasprime-essential' ),
                        ),
                        
                        array(
            
                            'id'      => 'search_page_banner_show',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Show ', 'saasprime-essential' ),
                            'default' => true
                        ),
                        
                        array(
                            'id'      => 'search_elementor_shortcode',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Elementor ShortCode?', 'saasprime-essential' ),
                            'default' => false,
                            'dependency' => array( 'search_page_banner_show', '==', 'true' ) 
                        ), 
                        
                        array(
                            'id'            => 'search_banner_shortcode',
                            'type'          => 'text',
                            'placeholder'   => '[WDB_ELEMENTOR_TPL id="99991951"]',
                            'title'         => esc_html__( 'Shortcode', 'saasprime-essential' ),
                            'dependency'    => array( 'search_page_banner_show|search_elementor_shortcode', '==|==', 'true|true' ) 
                        ),
                        
                        array(
                            'id'      => 'search_page_show_breadcrumb',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Breadcrumb', 'saasprime-essential' ),
                            'default' => true,
                            'dependency'    => array( 'search_page_banner_show|search_elementor_shortcode', '==|==', 'true|false' ) 
                        ),
                        
                        array(
            
                            'id'      => 'search_banner_page_title',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Page Title', 'saasprime-essential' ),
                            'default' => esc_html__('Search Page','saasprime-essential'),
                            'dependency'    => array( 'search_page_banner_show|search_elementor_shortcode', '==|==', 'true|false' ) 
                        ), 
            
                        array(
            
                            'id'      => 'search_banner_page_image',
                            'type'    => 'background',
                            'title'   => esc_html__( 'Upload Background', 'saasprime-essential' ),
                            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__area',
                            'dependency'    => array( 'search_page_banner_show|search_elementor_shortcode', '==|==', 'true|false' ) 
                        ),
                    )
                  ),
                  // 404
                  array(
                    'title'     => esc_html__('404','saasprime-essential'),
                    'icon'      => '',
                    'fields'    => array(
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( '404 Page Banner', 'saasprime-essential' ),
                        ),
                        
                        array(
            
                            'id'      => '404_page_banner_show',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Show ', 'saasprime-essential' ),
                            'default' => false
                        ),
                        
                        array(
                            'id'      => '404_elementor_shortcode',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Elementor ShortCode?', 'saasprime-essential' ),
                            'default' => false,
                            'dependency' => array( '404_page_banner_show', '==', 'true' ) 
                        ), 
                        
                        array(
                            'id'            => '404_banner_shortcode',
                            'type'          => 'text',
                            'placeholder'   => '[WDB_ELEMENTOR_TPL id="99991951"]',
                            'title'         => esc_html__( 'Shortcode', 'saasprime-essential' ),
                            'dependency'    => array( '404_page_banner_show|404_elementor_shortcode', '==|==', 'true|true' ) 
                        ),
                        
                        array(
                            'id'      => '404_page_show_breadcrumb',
                            'type'    => 'switcher',
                            'title'   => esc_html__( 'Page Breadcrumb', 'saasprime-essential' ),
                            'default' => true,
                            'dependency'    => array( '404_page_banner_show|404_elementor_shortcode', '==|==', 'true|false' ) 
                        ),
                        
                        array(
            
                            'id'      => '404_banner_page_title',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Page Title', 'saasprime-essential' ),
                            'default' => esc_html__('404 Error','saasprime-essential'),
                            'dependency'    => array( '404_page_banner_show|404_elementor_shortcode', '==|==', 'true|false' ) 
                        ), 
            
                        array(
            
                            'id'      => '404_banner_page_image',
                            'type'    => 'background',
                            'title'   => esc_html__( 'Upload Background', 'saasprime-essential' ),
                            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'saasprime-essential' ),
                            'output' => '.error404 .default-breadcrumb__area',
                            'dependency'    => array( '404_page_banner_show|404_elementor_shortcode', '==|==', 'true|false' ) 
                        ),
                    )
                  ),
                  // Search
                )
               
              ),
          
            
       
        )
    ) ); 
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Style', 'saasprime-essential' ),
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Style Settings', 'saasprime-essential' ),
            ),
           
            array(
                'id'            => 'opt-bannar-style',
                'type'          => 'tabbed',
                'title'         => 'Style',
                'tabs'          => array(
                  array(
                    'title'     => esc_html__('Blog Banner Style','saasprime-essential'),
                    'icon'      => 'fa fa-heart',
                    'fields'    => array(
                        array(
                            'id'    => 'banner_blog_title_color',
                            'type'  => 'color',
                            'title' => esc_html__( 'Title Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__area .default-breadcrumb__title, .blog .default-breadcrumb__area .default-breadcrumb__title'
                        ),
            
                        array(
                            'id'     => 'banner_blog_breadcrumb_color',
                            'type'   => 'color',
                            'title'  => esc_html__( 'Breadcrumb Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__area li,.blog .default-breadcrumb__area li a',
                            'output_important' => true
                        ),
            
                        array(
                            'id'    => 'banner_blog_image_overlay',
                            'type'  => 'color',
                            'title' => esc_html__( 'Overlay Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__area::before,.blog .default-breadcrumb__area::before',
                            'output_mode' => 'background-color'
                        ),
            
                        array(
                            'id'    => 'banner_blog_image_opacity',
                            'type'  => 'slider',
                            'title' => esc_html__( 'Overlay Opacity', 'saasprime-essential' ),
                            'min'     => 0,
                            'max'     => 1,
                            'step'    => 0.1
                        ),
                        
                        array(
                            'id'     => 'banner-blog-padding',
                            'type'   => 'spacing',
                            'title'  => esc_html__('Padding','saasprime-essential'),
                            'output' => '.blog .default-breadcrumb__area, .single-post .default-breadcrumb__area'                        
                        ),
                       
                    )
                  ),
                  array(
                    'title'     => esc_html__('Page Banner Style','saasprime-essential'),
                    'icon'      => '',
                    'fields'    => array(
                        array(
                            'id'     => 'banner_page_title_color',
                            'type'   => 'color',
                            'title'  => esc_html__( 'Page Title Color', 'saasprime-essential' ),
                            'output' => '.page .default-breadcrumb__area .default-breadcrumb__title'
                        ),
                        array(
                            'id'     => 'banner_page_breadcrumb_color',
                            'type'   => 'color',
                            'title'  => esc_html__( 'Page Breadcrumb Color', 'saasprime-essential' ),
                            'output' => '.page .default-breadcrumb__area li a,.page .default-breadcrumb__list li.active',
                            'output_important' => true
                        ),
            
                        array(
                            'id'    => 'banner_page_image_overlay',
                            'type'  => 'color',
                            'title' => esc_html__( 'Overlay Color', 'saasprime-essential' ),
                            'output' => '.page .default-breadcrumb__area::before',
                            'output_mode' => 'background-color'
                        ),
            
            
                        array(
                            'id'    => 'banner_page_image_opacity',
                            'type'  => 'slider',
                            'title' => esc_html__( 'Overlay Opacity', 'saasprime-essential' ),
                            'min'     => 0,
                            'max'     => 1,
                            'step'    => 0.1
                        ),
                        
                        array(
                            'id'     => 'page-banner-padding',
                            'type'   => 'spacing',
                            'title'  => esc_html__('Padding','saasprime-essential'),
                            'output' => '.page .default-breadcrumb__area'                        
                        ),
                    ),
                ),
                array(
                    'title'     => esc_html__('Search Banner Style','saasprime-essential'),
                    'icon'      => '',
                    'fields'    => array(
                        array(
                            'id'     => 'banner_search_title_color',
                            'type'   => 'color',
                            'title'  => esc_html__( 'Search Title Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__title'
                        ),
                        array(
                            'id'     => 'banner_search_breadcrumb_color',
                            'type'   => 'color',
                            'title'  => esc_html__( 'Page Breadcrumb Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__list li,.error404 .default-breadcrumb__list li a',
                            'output_important' => true
                        ),
            
                        array(
                            'id'     => 'banner_search_breadcrumb_icon_color',
                            'type'   => 'color',
                            'title'  => esc_html__( 'Breadcrumb Icon Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__list li i',
                            'output_important' => true
                        ),
                       
                        array(
                            'id'    => 'banner_search_image_overlay',
                            'type'  => 'color',
                            'title' => esc_html__( 'Overlay Color', 'saasprime-essential' ),
                            'output' => '.search .default-breadcrumb__area::before',
                            'output_mode' => 'background-color'
                        ),
            
                        array(
                            'id'    => 'banner_search_image_opacity',
                            'type'  => 'slider',
                            'title' => esc_html__( 'Overlay Opacity', 'saasprime-essential' ),
                            'min'     => 0,
                            'max'     => 1,
                            'step'    => 0.1,
                           
                        ),
                        
                        array(
                            'id'     => 'banner-search-padding',
                            'type'   => 'spacing',
                            'title'  => esc_html__('Padding','saasprime-essential'),
                            'output' => '.search .default-breadcrumb__area'                        
                        ),
                    )
                ),
                array(
                        'title'     => esc_html__('404 Banner Style','saasprime-essential'),
                        'icon'      => '',
                        'fields'    => array(
                            array(
                                'id'     => 'banner_404_title_color',
                                'type'   => 'color',
                                'title'  => esc_html__( 'Page Title Color', 'saasprime-essential' ),
                                'output' => '.error404 .default-breadcrumb__title'
                            ),
                            array(
                                'id'     => 'banner_404_breadcrumb_color',
                                'type'   => 'color',
                                'title'  => esc_html__( 'Page Breadcrumb Color', 'saasprime-essential' ),
                                'output' => '.error404 .default-breadcrumb__list li,.error404 .default-breadcrumb__list li a',
                                'output_important' => true
                            ),
                
                            array(
                                'id'     => 'banner_404_breadcrumb_icon_color',
                                'type'   => 'color',
                                'title'  => esc_html__( 'Breadcrumb Icon Color', 'saasprime-essential' ),
                                'output' => '.error404 .default-breadcrumb__list li i',
                                'output_important' => true
                            ),
                           
                            array(
                                'id'    => 'banner_404_image_overlay',
                                'type'  => 'color',
                                'title' => esc_html__( 'Overlay Color', 'saasprime-essential' ),
                                'output' => '.error404 .default-breadcrumb__area::before',
                                'output_mode' => 'background-color'
                            ),
                
                            array(
                                'id'    => 'banner_404_image_opacity',
                                'type'  => 'slider',
                                'title' => esc_html__( 'Overlay Opacity', 'saasprime-essential' ),
                                'min'     => 0,
                                'max'     => 1,
                                'step'    => 0.1                               
                            ),
                            
                            array(
                                'id'     => 'banner_404_padding',
                                'type'   => 'spacing',
                                'title'  => esc_html__('Padding','saasprime-essential'),
                                'output' => '.error404 .default-breadcrumb__area'                        
                            ),
                        )
                  ),
                )
              ),
           )
    ) ); 