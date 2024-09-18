<?php

// backup option
CSF::createSection( 'saasprime_settings', array(

	'title'  => esc_html__( 'Global Style', 'saasprime-essential' ),
	'icon'   => 'fab fa-css3',
	'fields' => array(

		array(
			'type'    => 'subheading',
			'content' => esc_html__( 'Global Style', 'saasprime-essential' ),
		),


		array(
			'id'    => 'opt-tabbed-general',
			'type'  => 'tabbed',
			'title' => 'Global',
			'tabs'  => array(
				array(
					'title'  => 'Body',
					'icon'   => '',
					'fields' => array(

						array(
							'id'                    => 'body_bg_color',
							'type'                  => 'background',
							'title'                 => esc_html__( 'Body Background', 'saasprime-essential' ),
							'desc'                  => esc_html__( 'Set the body background color', 'saasprime-essential' ),
							'default'               => '',
							'background_image'      => true,
							'background_position'   => true,
							'background_repeat'     => true,
							'background_attachment' => true,
							'background_size'       => true,
							'output'                => 'html body.joya-gl-blog .body-wrapper,html .joya-gl-blog',
						),

						array(
							'id'    => 'body_primary_color',
							'type'  => 'color',
							'title' => esc_html__( 'Primary Color', 'saasprime-essential' ),
							'desc'  => esc_html__( 'Set footer widgetbody content color form here.', 'saasprime-essential' ),

						),
						array(
							'id'    => 'body_secondary_color',
							'type'  => 'color',
							'title' => esc_html__( 'Secondary Color', 'saasprime-essential' ),
							'desc'  => esc_html__( 'Set main primary color for hover and others.', 'saasprime-essential' )
						),

						array(
							'id'     => 'body_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Body Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog'
						),
						array(
							'id'     => 'wp_admin_top_margin',
							'type'   => 'spacing',
							'title'  => esc_html__( 'Admin Topbar margin', 'saasprime-essential' ),
							'left'   => false,
							'right'  => false,
							'bottom' => false,
							'units'  => array( 'px', 'em', 'cm' ),


						),
					)

				),
				array(
					'title'  => 'Heading',
					'icon'   => 'fas fa-heading',
					'fields' => array(

						array(
							'id'     => 'heading_color',
							'type'   => 'color',
							'title'  => esc_html__( 'Heading Color', 'saasprime-essential' ),
							'desc'   => esc_html__( 'Set Heading Color.', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h1,
                        body.joya-gl-blog h2,
                        body.joya-gl-blog h3,
                        .joya-gl-blog .default-sidebar__w-title,
                        body.joya-gl-blog h4,
                        body.joya-gl-blog h5,
                        body.joya-gl-blog h6'
						),

						array(
							'id'     => 'heading_hover_color',
							'type'   => 'color',
							'title'  => esc_html__( 'Heading Hover Color', 'saasprime-essential' ),
							'desc'   => esc_html__( 'Set Heading Hover Color.', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h1:hover,
                        .joya--post-navigation h3:hover span,
                        body.joya-gl-blog h2:hover,
                        body.joya-gl-blog h3:hover,
                        body.joya-gl-blog h4:hover,
                        body.joya-gl-blog h5:hover,
                        body.joya-gl-blog h6:hover'
						),

						array(
							'id'     => 'h1_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Heading H1 Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h1'
						),

						array(
							'id'     => 'h2_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Heading H2 Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h2'
						),

						array(
							'id'     => 'h3_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Heading H3 Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h3'
						),

						array(
							'id'     => 'h4_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Heading H4 Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h4'
						),
						array(
							'id'     => 'h5_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Heading H5 Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h5'
						),
						array(
							'id'     => 'h6_font_typho',
							'type'   => 'typography',
							'title'  => esc_html__( 'Heading H6 Font', 'saasprime-essential' ),
							'output' => 'body.joya-gl-blog h6'
						),

					)
				),
				array(
					'title'  => 'Button',
					// 'icon'      => 'fas fa-comment',
					'fields' => array(

						array(
							'id'          => 'gl_button_style',
							'type'        => 'select',
							'title'       => esc_html__( 'Select Button Style', 'saasprime-essential' ),
							'placeholder' => esc_html__( 'Select Button Style', 'saasprime-essential' ),
							'options'     => array(
								'btn-hover-none'      => esc_html__( 'None', 'saasprime-essential' ),
								'btn-hover-divide'    => esc_html__( 'Divided', 'saasprime-essential' ),
								'btn-hover-cross'     => esc_html__( 'Cross', 'saasprime-essential' ),
								'btn-hover-cropping'  => esc_html__( 'Cropping', 'saasprime-essential' ),
								'btn-rollover-top'    => esc_html__( 'Rollover Top', 'saasprime-essential' ),
								'btn-rollover-left'   => esc_html__( 'Rollover Left', 'saasprime-essential' ),
								'btn-parallal-border' => esc_html__( 'Parallel Border', 'saasprime-essential' ),
								'btn-rollover-cross'  => esc_html__( 'Rollover Cross', 'saasprime-essential' ),
							),
						),

						array(
							'id'     => 'gl_button_text_color',
							'type'   => 'color',
							'title'  => 'Text Color',
							'output' => array(
								'color' => '.wdb--theme-btn.wc-btn-primary',
							)
						),

						array(
							'id'     => 'gl_button_text_h_color',
							'type'   => 'color',
							'title'  => esc_html__( 'Hover Text Color', 'saasprime-essential' ),
							'output' => array(
								'color' => '.wdb--theme-btn.wc-btn-primary:hover',
							)
						),

						array(
							'id'     => 'gl_button_bg_color',
							'type'   => 'color',
							'title'  => esc_html__( 'Background Color', 'saasprime-essential' ),
							'output' => array(
								'background-color' => '.wdb--theme-btn.wc-btn-primary',
							)
						),

						array(
							'id'     => 'gl_button_bg_h_color',
							'type'   => 'color',
							'title'  => esc_html__( 'Hover Background Color', 'saasprime-essential' ),
							'output' => array(
								'background-color' => '.wdb--theme-btn:not(.btn-item, .btn-parallal-border, .btn-rollover-cross, .wdb-btn-ellipse):after, .wdb--theme-btn.btn-hover-bgchange span, .wdb--theme-btn.btn-rollover-cross:hover, .wdb--theme-btn.btn-parallal-border:hover, .wdb--theme-btn.wdb-btn-ellipse:hover:before, .wdb--theme-btn.btn-hover-none:hover',
							)
						),

						array(
							'id'     => 'gl_button_border_color',
							'type'   => 'color',
							'title'  => esc_html__( 'Border Color', 'saasprime-essential' ),
							'output' => array(
								'border-color' => '.wdb--theme-btn.wc-btn-primary::before, .wdb--theme-btn.wc-btn-primary::after',
							)
						),

						array(
							'id'          => 'gl_button_border_radius',
							'type'        => 'spacing',
							'title'       => esc_html__( 'Border Radius', 'saasprime-essential' ),
							'output'      => '.wdb--theme-btn.wc-btn-primary',
							'output_mode' => 'border-radius',
						),

					)
				),
			)
		),
	),
) );


