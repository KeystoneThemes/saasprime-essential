<?php 
        
        // footer a top-tab
        CSF::createSection( SAASPRIME_OPTION_KEY, array(
            'id'    => 'footer_tab',                         // Set a unique slug-like ID
            'title' => esc_html__( 'Footer', 'saasprime-essential' ),
            'icon'  => 'fa fa-cog',
        ) ); 

        // Footer
        CSF::createSection( SAASPRIME_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Widget & Style', 'saasprime-essential' ),
            'icon'   => 'fa fa-paint-brush',
            'fields' => array(
             
                array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Settings', 'saasprime-essential' ),
                ),
               
                array(
                    'id'      => 'footer_style',
                    'type'    => 'image_select',
                    'title'   => esc_html__( 'Footer Style', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Select the Footer style which you want to show on your website.', 'saasprime-essential' ),
                    'options' => array(                    
                        'style2'       => SAASPRIME_ESSENTIAL_ASSETS_URL. '/images/footer/footer_2.svg',
                    ),
                    'default' => 'style2',
                ),
               
                array(
                    'id'           => 'footer_logo',
                    'type'         => 'upload',
                    'title'        => esc_html__( 'Logo', 'saasprime-essential' ),
                    'library'      => 'image',
                    'placeholder'  => 'http://',
                    'button_title' => esc_html__( 'Add Image', 'saasprime-essential' ),
                    'remove_title' => esc_html__( 'Remove Image', 'saasprime-essential' ),
                ),
              
                array(
                    'id'      => 'footer_bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer Background ', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'saasprime-essential' ),
                    'default' => array(
                        'image'      => '',
                        'repeat'     => 'no-repeat',
                        'position'   => 'center center',
                        'attachment' => 'scroll',
                        'size'       => 'cover',
                        'color'      => '#182044',
                    ),
                    'output' => '.jfooter-wrapper',
                ),
      
                array(
                        'id'      => 'footer_padding_top',
                        'type'    => 'slider',
                        'title'   => esc_html__( 'Footer Main Padding Top', 'saasprime-essential' ),
                        'min'     => 0,
                        'max'     => 200,
                        'step'    => 1,
                        'unit'    => 'px',
                ),
             
                array(
                        'id'      => 'footer_padding_bottom',
                        'type'    => 'slider',
                        'title'   => esc_html__( 'Footer Padding Bottom', 'saasprime-essential' ),
                        'min'     => 0,
                        'max'     => 200,
                        'step'    => 1,
                        'unit'    => 'px',
                ),

                array(
                    'id'      => 'footer_inner_padding_bottom',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Widget Padding Bottom', 'saasprime-essential' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                ),
             
                array(
                  'type'    => 'subheading',
                  'content' => esc_html__( 'Footer Text & Link Color', 'saasprime-essential' ),
                ),
                array(
                    'id'      => 'footer_widget_title_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget Title Color', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Set footer widget title color form here.', 'saasprime-essential' ),
                    'output' => '.jfooter-wrapper .widget-title',
                ),
                array(
                    'id'      => 'footer_widget_content_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget content Color', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Set footer widget content color form here.', 'saasprime-essential' ),
                    'output' => '.jfooter-wrapper .widget,
                    .jfooter-wrapper .widget p,
                    .jfooter-wrapper .widget div,
                    .jfooter-wrapper .widget li,
                    .jfooter-wrapper .widget table td,
                    div#calendar_wrap table > tbody > tr > td,
                    div#calendar_wrap table > thead > tr > th,
                    .jfooter-wrapper .widget *'
                ),
                array(
                    'id'      => 'footer_widget_title_margin_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Widget Title margin Top', 'saasprime-essential' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                    
              ),
                array(
                    'id'      => 'footer_widget_title_margin_bottom',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Widget Title margin bottom', 'saasprime-essential' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                    
              ),
              array(
                        'id'      => 'footer_widget_content_bottom_margin',
                        'type'    => 'slider',
                        'title'   => esc_html__( 'Widget Content Margin Bottom', 'saasprime-essential' ),
                        'min'     => 0,
                        'max'     => 200,
                        'step'    => 1,
                        'unit'    => 'px',
                        
                ),
                array(
                    'id'      => 'footer_link_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Footer links color', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Set the footer area link color', 'saasprime-essential' ),
                    'output' => '.jfooter-wrapper .single-blog-post a ,.jfooter-wrapper .tagcloud a, .jfooter-wrapper .widget a, .jfooter-wrapper .widget ul li a.url,.jfooter-wrapper.widget ul li a.rsswidget'
                ),

                array(
                    'id'      => 'footer_link_hover',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Footer links Hover color', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Set the footer area link hover color', 'saasprime-essential' ),
                    'output'  => '.jfooter-wrapper .single-blog-post a:hover,.jfooter-wrapper .tagcloud a:hover,.jfooter-wrapper .widget a:hover, .jfooter-wrapper .widget ul li a.url:hover,.jfooter-wrapper .widget ul li a.rsswidget:hover'
                ),
          
            ),

        ) );

        
        // copyright
        CSF::createSection( SAASPRIME_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Copyright', 'saasprime-essential' ),
            'icon'   => 'fa fa-copyright',
            'fields' => array(

                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Footer Copyright', 'saasprime-essential' ),
                ),
                array(
                    'id'       => 'copyright_text',
                    'type'     => 'wp_editor',
                    'title'    => esc_html__( 'Footer Copyright', 'saasprime-essential' ),
                    'desc'     => esc_html__( 'Set the footer copyright text','saasprime-essential' ),
                    'settings' => array(
                        'textarea_rows' => 7,
                        'tinymce'       => true,
                        'media_buttons' => false,
                      ),
                      'default' => 'Copryright &copy; Keystone Themes | All Rights Reserved.',
                ),
                
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Copyright', 'saasprime-essential' ),
                ),

                array(
                    'id'      => 'copyright_padding_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Copyright Padding top', 'saasprime-essential' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                        
                ),

                array(
                    'id'      => 'copyright_padding_bottom',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Copyright Padding Bottom', 'saasprime-essential' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                ),

                array(
                    'id'      => 'copyright_margin_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Copyright margin top', 'saasprime-essential' ),
                    'min'     => 0,
                    'max'     => 300,
                    'step'    => 1,
                    'unit'    => 'px',
                        
                ),

                array(
                    'id'      => 'footer_copyright_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Copyright Text Color', 'saasprime-essential' ),
                    'desc'    => esc_html__( 'Set footer copyright text color form here.', 'saasprime-essential' ),
                    'output'  => '.jfooter-wrapper .jcopyright p'
                ),

                array(
                    'id'     => 'footer_copyright_border',
                    'type'   => 'border',
                    'title'   => esc_html__( 'Copyright Border', 'saasprime-essential' ),
                    'output'  => '.jfooter-wrapper .jcopyright'
                ),
                
             
            ),

        ) ); 