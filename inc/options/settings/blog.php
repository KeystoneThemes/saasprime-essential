<?php 

    // Blog a top-tab
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'id'    => 'blog_tab',                     // Set a unique slug-like ID
        'title' => esc_html__( 'Blog', 'saasprime-essential' ),
        'icon'  => 'fas fa-archive',
    ) ); 


    
    // Blog
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'blog_tab',                        // The slug id of the parent section
        'icon'   => 'fas fa-archive',
        'title'  => esc_html__( 'General Blog Settings', 'saasprime-essential' ),
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'General Blog Settings', 'saasprime-essential' ),
            ),

            array(
                'id'          => 'blog_layout',
                'type'        => 'select',
                'title'       => esc_html__('Blog Layout', 'saasprime-essential'),
                'placeholder' => 'Select an Style',
                'options'     => array(
                    'style-1'       => esc_html__('Style 1', 'saasprime-essential'),
                    'style-2'  => esc_html__('Style 2', 'saasprime-essential'),
                  
                ),
                'default'    => 'style-1',
            ),
             
            array(
                'id'          => 'blog_sidebar',
                'type'        => 'select',
                'title'       => esc_html__('Blog Sidebar', 'saasprime-essential'),
                'placeholder' => 'Select an option',
                'options'     => array(
                    'blog-lg'       => esc_html__('No sidebar', 'saasprime-essential'),
                    'left-sidebar'  => esc_html__('Left Sidebar', 'saasprime-essential'),
                    'right-sidebar' => esc_html__('Right Sidebar', 'saasprime-essential'),
                ),
                'default'    => '',
            ),
            array(
                'id'            => 'blog_content_container_size',
                'type'          => 'dimensions',
                'title'         => esc_html__( 'Content Container size(px)', 'saasprime-essential' ),
                'placeholder'   => '860',
                'dependency' => array( 'blog_post_nav', '==', 'true' ),
                'units'         => array( 'px','em','cm' ),
                'output_prefix' => 'max',
                'height'        => false,
                'output'        => 'html .default-blog__grid',
            ),
            array(
                'id'          => 'blog_content_padding',
                'type'        => 'spacing',
                'title'       => esc_html__('Blog Content Padding','saasprime-essential'),
                'left'        => false,
                'right'       => false,
                'units'       => array( 'px','em','cm' ),
                'output_mode' => 'padding',
                'output'      => 'html .default-blog__area',
            ),
            array(
                'id'      => 'blog_meta_above_title',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog meta above title', 'saasprime-essential' ),
                'default' => false,
            ),
            
            array(
                'id'      => 'blog_thumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Thumbnail', 'saasprime-essential' ),
                'default' => false,
            ),

	        array(
		        'id'      => 'blog_excerpt',
		        'type'    => 'switcher',
		        'title'   => esc_html__( 'Blog Excerpt', 'saasprime-essential' ),
		        'default' => true,
	        ),

            array(
                'id'      => 'blog_author',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author', 'saasprime-essential' ),
                'default' => false,
            ),
            
            array(
                'id'      => 'blog_author_image',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author image', 'saasprime-essential' ),
                'default' => false,
            ),

            array(
                'id'      => 'blog_date',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Date', 'saasprime-essential' ),
                'default' => true,
            ),
            
            array(
                'id'      => 'blog_comment',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Comment', 'saasprime-essential' ),
                'default' => false,
            ),
            
            array(
                'id'      => 'blog_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category', 'saasprime-essential' ),
                'default' => true,
            ),
           
            array(
                'id'      => 'blog_readmore',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Readmore', 'saasprime-essential' ),
                'default' => true,
            ),
            array(
                'id'      => 'blog_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Readmore Text', 'saasprime-essential' ),
                'default' => esc_html__( 'Read More', 'saasprime-essential' ),
            ),
            
            array(
                'id'      => 'blog_readmore__icon',
                'type'    => 'media',
                'title'   => esc_html__('Readmore Icon','saasprime-essential'),
                'library' => 'image',
            ),
          
            array(
                'id'      => 'blog_post_nav',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Navigation', 'saasprime-essential' ),
                'default' => true,
            ),
            
            array(
                'id'         => 'blog_next_icon',
                'type'       => 'media',
                'title'      => esc_html__('Next Icon','saasprime-essential'),
                'library'    => 'image',           
                'dependency' => array( 'blog_post_nav', '==', 'true' ),
            ),
            
            array(
                'id'         => 'blog_prev_icon',
                'type'       => 'media',
                'title'      => esc_html__('Prev Icon','saasprime-essential'),
                'library'    => 'image',            
                'dependency' => array( 'blog_post_nav', '==', 'true' ),
            ),

            array(
            'id'          => 'blog_post_nav_alignment',
            'type'        => 'select',
            'title'       => esc_html__( 'Navigation Alignment', 'saasprime-essential' ),
            'placeholder' => 'Select an option',
            'options'     => array(
                'justify-content-start'  => esc_html__( 'Left', 'saasprime-essential' ),
                'justify-content-center' => esc_html__( 'Center', 'saasprime-essential' ),
                'justify-content-end'    => esc_html__( 'Right', 'saasprime-essential' ),
            ),          
            'dependency' => array( 'blog_post_nav', '==', 'true' ),
            'default'    => 'justify-content-start'
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog & Page Default Options', 'saasprime-essential' ),
            ),
            
            array(
                'id'      => 'blog_excerpt_word',
                'type'    => 'number',
                'title'   => esc_html__( 'Blog Excerpt Word', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'saasprime-essential' ),
                'default' => '30',
            ),
        

        )
    ) ); 
     // fav icon
    CSF::createSection( SAASPRIME_OPTION_KEY, array(
        'parent' => 'blog_tab',                           // The slug id of the parent section  
        'title'  => esc_html__('Sidebar Styles','saasprime-essential'),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Sidebar Styles', 'saasprime-essential' ),
            ),


            array(
                'id'      => 'news__sidebars_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Sidebar Background', 'saasprime-essential' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'saasprime-essential' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                   
                ),
                'output' => '.default-sidebar__widget .widget,.default-sidebar__widget'
            ),
           
            array(
                    'id'    => 'news__sidebars_padding_top',
                    'type'  => 'slider',
                    'title' => esc_html__( 'Sidebar Padding Top', 'saasprime-essential' ),
                    'min'   => 0,
                    'max'   => 200,
                    'step'  => 1,
                    'unit'  => 'px',
                    
            ),
            array(
                    'id'    => 'news__sidebars_padding_bottom',
                    'type'  => 'slider',
                    'title' => esc_html__( 'Sidebar Padding Bottom', 'saasprime-essential' ),
                    'min'   => 0,
                    'max'   => 200,
                    'step'  => 1,
                    'unit'  => 'px',
                    
            ),
         
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Text & Link Color', 'saasprime-essential' ),
            ),
            array(
                'id'     => 'news__sidebars_widget_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Title Color', 'saasprime-essential' ),
                'desc'   => esc_html__( 'Set Sideabr widget title color form here.', 'saasprime-essential' ),
                'output' => '.default-sidebar__widget .widget .widget-title,.default-sidebar__widget .widget-title'
            ),
            array(
                'id'     => 'news__sidebars_widget_content_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Content Color', 'saasprime-essential' ),
                'desc'   => esc_html__( 'Set footer widget content color form here.', 'saasprime-essential' ),
                'output' => '
                .default-sidebar__widget select, 
                .default-sidebar__widget .tagcloud a,
                .default-sidebar__widget ul li a,
                .rsswidget,
                .default-sidebar__recent-item p,
                .default-sidebar__widget,               
                .default-sidebar__widget .widget,               
                .default-sidebar__wrapper .widget_pages li a,
                .default-sidebar__wrapper .widget_meta li a, 
                .default-sidebar__wrapper .widget_nav_menu li a, 
                .default-sidebar__wrapper .widget_recent_entries li a,s
                .default-sidebar__widget ul li a,
                .default-sidebar__wrapper .widget_rss ul cite,
                .default-sidebar__wrapper .widget_recent_comments li a,
                .default-sidebar__wrapper .widget_rss ul a,
                .default-sidebar__wrapper .widget_rss .rssSummary,
                .default-sidebar__wrapper .widget_rss ul .rss-date,
                .default-sidebar__widget .widget ul li a.url'
            ),
            array(
                'id'     => 'sidebar_border_color',
                'type'   => 'border',
                'title'  => esc_html__( 'Border Color', 'saasprime-essential' ),
                'output' => '.default-sidebar__widget'
            ),
            array(
                'id'    => 'sidebar_widget_title_margin_top',
                'type'  => 'slider',
                'title' => esc_html__( 'Title Margin Top', 'saasprime-essential' ),
                'min'   => 0,
                'max'   => 200,
                'step'  => 1,
                'unit'  => 'px',
                
          ),
            array(
                'id'    => 'sidebar_widget_title_margin_bottom',
                'type'  => 'slider',
                'title' => esc_html__( 'Title Margin bottom', 'saasprime-essential' ),
                'min'   => 0,
                'max'   => 200,
                'step'  => 1,
                'unit'  => 'px',
                
          ),
       
            array(
                'id'     => 'sidebars_link_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Sideber links color', 'saasprime-essential' ),
                'desc'   => esc_html__( 'Set the Sidebar area link color', 'saasprime-essential' ),
                'output' => '.default-sidebar__widget .single-blog-post a .default-sidebar__widget .tagcloud a, .default-sidebar__widget .widget a, .default-sidebar__widget .widget ul li a.url,.default-sidebar__widget .widget ul li a.rsswidget'
            ),

            array(
                'id'     => 'sidebar_link_hover',
                'type'   => 'color',
                'title'  => esc_html__( 'Sidebar links Hover color', 'saasprime-essential' ),
                'desc'   => esc_html__( 'Set the footer area link hover color', 'saasprime-essential' ),
                'output' => '.default-sidebar__widget .single-blog-post a:hover, .default-sidebar__widget .tagcloud a:hover,.default-sidebar__widget .widget a:hover, .default-sidebar__widget .widget ul li a.url:hover,.default-sidebar__widget .widget ul li a.rsswidget:hover'
            ),

        )
    ) );