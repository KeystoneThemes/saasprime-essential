<?php

CSF::createSection( SAASPRIME_OPTION_KEY, array(
    'id'    => 'cpt_tab',                         // Set a unique slug-like ID
    'title' => esc_html__( 'CPT & Taxonomy', 'saasprime-essential' ),
    'icon'  => 'fa fa-cog',
) ); 

CSF::createSection( 'saasprime_settings', array(
    'parent' => 'cpt_tab', // The slug id of the parent section
    'title'  => esc_html__( 'Custom Post Type', 'saasprime-essential' ),
    'icon'   => 'fa fa-share-alt',
    'fields' => array(     

        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Custom Post Type', 'saasprime-essential' ),
          ),
         
        array(
            'id'     => 'cpt_options',
            'type'   => 'repeater',
            'title'  => esc_html__('Custom Post Type','saasprime-essential'),
            'fields' => array(
          
                array(
                    'id'      => 'posttype',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Post Type (Unique)', 'saasprime-essential' ),                   
                ),
                
                array(
                    'id'      => 'singular_name',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Singular Name', 'saasprime-essential' ),                   
                ),
                
                array(
                    'id'      => 'plural_name',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plural Name', 'saasprime-essential' ),                   
                ),
                 
                array(
                    'id'      => 'slug',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Front Slug', 'saasprime-essential' ),                   
                ),
                
                array(
                    'id'          => 'supports',
                    'type'        => 'select',
                    'title'       => esc_html__('Select Supports','saasprime-essential'),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select an option','saasprime-essential'),
                    'options'     => array(
                        'title' => 'Title', 
                        'editor' => 'Editor',
                        'author' => 'Author',
                        'thumbnail' => 'Thumbnail',
                        'excerpt' => 'Excerpt',
                        'comments' => 'Comments'
                    ),
                    'default'     => 'title'
                ),                  
                
                array(
                    'id'         => 'exclude_from_search',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Exclude From Search?','saasprime-essential'),
                    'default'    => false
                ),
                
                array(
                    'id'         => 'has_archive',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Has Archive?','saasprime-essential'),
                    'default'    => false
                ),
                
                array(
                    'id'         => 'publicly_queryable',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Publicly Queryable?','saasprime-essential'),
                    'default'    => false
                ),
             
                array(
                    'id'         => 'show_in_menu',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in admin menu?','saasprime-essential'),
                    'default'    => true
                ),               
                array(
                    'id'      => 'icon',
                    'type'    => 'media',
                    'title' => esc_html__('Nav Icon','saasprime-essential'),
                    'library' => 'image',
                    'preview' => true
                  ),
                array(
                    'id'         => 'show_in_nav_menus',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in nav menus?','saasprime-essential'),
                    'default'    => false
                ), 
          
            ),
          ),
          array(
            'type'    => 'subheading',
            'content' => esc_html__('Custom Taxonomy','saasprime-essential'),
          ),
          
          array(
            'id'     => 'cpt_taxonomy_options',
            'type'   => 'repeater',
            'title'  => esc_html__('Custom Taxonomy Type','saasprime-essential'),
            'fields' => array(
          
                array(
                    'id'      => 'taxonomy_name',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Taxonomy Name (Unique)', 'saasprime-essential' ),                   
                ),
                
                array(
                    'id'      => 'taxonomy_label',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Singular Name', 'saasprime-essential' ),                   
                ),
                
                array(
                    'id'      => 'taxonomy_plural_label',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plural Name', 'saasprime-essential' ),                   
                ),
                 
                array(
                    'id'      => 'slug',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Front Slug', 'saasprime-essential' ),                   
                ),
                
                array(
                    'id'          => 'post_types',
                    'type'        => 'select',
                    'title'       => esc_html__('Select post types','saasprime-essential'),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select an post type','saasprime-essential'),
                    'options'     => function_exists('saasprime_get_cache_post_types') ?  saasprime_get_cache_post_types() : [],
                    'default'     => ''
                ),
                
                array(
                    'id'         => 'publicly_queryable',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Publicly Queryable?','saasprime-essential'),
                    'default'    => true
                ),
                
                array(
                    'id'         => 'show_in_menu',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in admin menu?','saasprime-essential'),
                    'default'    => true
                ),  
                 
                
                array(
                    'id'         => 'show_in_nav_menus',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in nav menus?','saasprime-essential'),
                    'default'    => false
                ),
                
                array(
                    'id'         => 'show_ui',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in ui?','saasprime-essential'),
                    'default'    => true
                ), 
                array(
                    'id'         => 'show_in_rest',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in Rest?','saasprime-essential'),
                    'default'    => false
                ), 
                         
            ),
          ),         
    ),

) );