<?php 
 

 // Post Page
CSF::createSection( SAASPRIME_OPTION_KEY, array(
    'icon'   => 'fas fa-search',
    'id'    => 'search_page_section', // Set a unique slug-like ID
    'title' => esc_html__( 'Search', 'saasprime-essential' )
    ) );
    
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'search_page_section', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content', 'saasprime-essential' ),
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Search Page Setting', 'saasprime-essential' ),
              ),
              
              array(
                'id'      => 'enable_search_sidebar',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Sidebar', 'saasprime-essential' ),
                'desc'    => esc_html__( 'If you want to enable sidebar form you can set ( YES / NO )', 'saasprime-essential' ),
                'default' => false,
              ),
            
              array(
                  'id'         => 'search_not_found_title',
                  'type'       => 'text',
                  'title'      => esc_html__( 'Search not found title', 'saasprime-essential' ),
                  'desc'       => esc_html__( 'Set your Search title.', 'saasprime-essential' ),
                  'default'    => esc_html__( 'Nothing found!', 'saasprime-essential' ),
              ),
              
              array(
                'id'         => 'search_not_found_content',
                'type'       => 'wp_editor',
                'title'      => esc_html__( 'Error content', 'saasprime-essential' ),
                'desc'       => esc_html__( 'Set your 404 error subtitle.', 'saasprime-essential' ),
                'default'    => esc_html__( 'It looks like nothing was found here. Maybe try a search?', 'saasprime-essential' ),
             ),
              
              array(
                'id'         => 'search_found_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Found Title', 'saasprime-essential' ),
                'desc'       => esc_html__( 'Set your search found title.', 'saasprime-essential' ),
                'default'    => esc_html__( 'Search Results for:', 'saasprime-essential' ),
             ),
         
             array(
                  'id'      => 'enable_search_form',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Enable Search Form', 'saasprime-essential' ),
                  'desc'    => esc_html__( 'If you want to enable or disable search form you can set ( YES / NO )', 'saasprime-essential' ),
                  'default' => true,
             ),
             
             array(
                'type'    => 'heading',
                'content' => 'Limit Post type in Search Result',
              ),
             
             array(
                'id'          => 'search_result_post_types',
                'type'        => 'select',
                'title'       => 'Select post types for search result',
                'chosen'      => true,
                'multiple'    => true,
                'placeholder' => 'Select an post type',
                'options'     => function_exists('saasprime_get_cache_post_types') ?  array_merge( saasprime_get_cache_post_types(), ['post' => 'post' , 'page'=> 'page'] ) : ['post' => 'post' , 'page'=> 'page'],
                'default'     => ''
            ),  
              
        )
    ) );
    
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'search_page_section', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content Styles', 'saasprime-essential' ),
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Content Styles', 'saasprime-essential' ),
            ),

            array(
            
                'id'      => 'search_bg_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px.', 'saasprime-essential' ),
                'output' => '.search .body-wrapper'
            ),
            
            array(
                'id'     => 'search_content_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Title Color', 'saasprime-essential' ),
                'output' => '.search .default-search-title, .default-search-title-wrapper h2',
                'output_important' => true
            ),
            
            
            array(
                'id'     => 'search_content_c_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Content Color', 'saasprime-essential' ),
                'output' => '.search .default-search__again-form p',
                'output_important' => true
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Form', 'saasprime-essential' ),
              ),
              
            array(
                'id'     => 'search_form_input_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Input Color', 'saasprime-essential' ),
                'output' => '.search .joya-search-form input',
                'output_important' => true
            ),
            array(
                'id'     => 'search_form_input_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Input Icon Color', 'saasprime-essential' ),
                'output' => '.search .joya-search-form button i',
                'output_important' => true
            ),
            array(
                'id'     => 'search_form_input_bg_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Input bgColor', 'saasprime-essential' ),
                'output' => '.search .joya-search-form input',
                'output_important' => true,
                'output_mode' => 'background-color'
            ),
            
            array(
                'id'     => 'search_form_input_border',
                'type'   => 'border',
                'title'  => esc_html__('Input Border','saasprime-essential'),
                'output' => '.search .joya-search-form input'
            ),
            
            array(
                'id'     => 'search_content_input_placeholdercolor',
                'type'   => 'color',
                'title'  => esc_html__( 'Input Placeholder Color', 'saasprime-essential' ),
                'output' => '.search .joya-search-form input::placeholder,.search .joya-search-form input::-ms-input-placeholder',
                'output_important' => true
            ),
            array(
                'id'     => 'search_content_button_hborder',
                'type'   => 'border',
                'title'  => esc_html__('Input Border','saasprime-essential'),
                'output' => '.search .joya-search-form input:hover'
            ),
        )
    ) );
    