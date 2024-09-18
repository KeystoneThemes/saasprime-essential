<?php 

    // social
    CSF::createSection( 'saasprime_settings', array(
        'title'  => esc_html__( 'Social', 'saasprime-essential' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Social Share', 'saasprime-essential' ),
            ),
            array(
                'id'      => 'enable_social_share',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable social Share', 'saasprime-essential' ),
                'desc'    => esc_html__( 'If you want to enable or disable 404 page button you can set ( YES / NO )', 'saasprime-essential' ),
                'default' => false,
            ),
            array(
                'id'           => 'social_share',
                'type'         => 'group',
                'title'        => esc_html__( 'Add social share', 'saasprime-essential' ),
                'button_title' => esc_html__( 'Add new share', 'saasprime-essential' ),
                'desc'         => esc_html__( 'Set the social share icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'saasprime-essential' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'saasprime-essential' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'saasprime-essential' ),
                        'default' => 'fa fa-facebook'
                    ),

                   
                    array(
                        'id'          => 'social_type',
                        'type'        => 'select',
                        'title'       => 'Select',
                        'placeholder' => esc_html__( 'Select an type' , 'saasprime-essential' ),
                        'options'     => saasprime_social_share_list(),
                        
                      ),
                ),
            ),

            array(
                'id'           => 'social_link',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Link', 'saasprime-essential' ),
                'button_title' => esc_html__( 'Add New Link', 'saasprime-essential' ),
                'desc'         => esc_html__( 'Set the social icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'saasprime-essential' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'saasprime-essential' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'saasprime-essential' ),
                        'default' => 'fa fa-facebook'
                    ),

                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'saasprime-essential' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'saasprime-essential' ),
                        'default' => 'http://facebook.com/keystonethemes'
                    ),

	                array(
		                'id'    => 'opt_new_tab',
		                'type'  => 'switcher',
		                'title' => esc_html__('New Tab','saasprime-essential'),
	                ),

                ),
            ),
   
            array(
                'id'         => 'social_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Color', 'saasprime-essential' ),
                'desc'       => esc_html__( 'Set the footer social bookmark color from here.', 'saasprime-essential' ),
                'default'    => '',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

            array(
                'id'         => 'social_hover_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Hover Color', 'saasprime-essential' ),
                'desc'       => esc_html__( 'Set the footer social bookmark hover color from here.', 'saasprime-essential' ),
                'default'    => '',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

        ),

    ) );