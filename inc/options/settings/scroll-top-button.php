<?php 

  // scroll
  CSF::createSection( 'saasprime_settings', array(
    'title'  => esc_html__( 'Scroll Top Button', 'saasprime-essential' ),
    'icon'   => 'fa fa-arrow-up',
    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Scroll Top Button', 'saasprime-essential' ),
        ),
        array(
            'id'      => 'enable_scroll_top',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Scroll Top', 'saasprime-essential' ),
            'desc'    => esc_html__( 'If you want to enable or disable scroll to top button you can set ( YES / NO )', 'saasprime-essential' ),
            'default' => true,
        ),
        
        array(
            'id'      => 'footer_copyright_back_button_color',
            'type'    => 'color',
            'title'   => esc_html__( 'Fill Color', 'saasprime-essential' ),
            'desc'    => esc_html__( 'Set footer Back Button icon color form here.', 'saasprime-essential' ),
          
          
        ),
        
        array(
            'id'      => 'footer_back_button_progress_color',
            'type'    => 'color',
            'title'   => esc_html__( 'Progress Color', 'saasprime-essential' ),
            'desc'    => esc_html__( 'Set footer Back Button progress color form here.', 'saasprime-essential' ),
          
          
        ),
        
        array(
            'id'      => 'footer_copyright_icon_color',
            'type'    => 'color',
            'title'   => esc_html__( 'Back Button Icon Color', 'saasprime-essential' ),
            'desc'    => esc_html__( 'Set footer Back Button icon color form here.', 'saasprime-essential' ),
            'output' => '.progress-wrap::after'
        ),

      
    ),
    
) ); 