<?php

	// Woo a top-tab
	CSF::createSection( SAASPRIME_OPTION_KEY, array(
		'id'    => 'wdb_woo_tab',                     // Set a unique slug-like ID
		'title' => esc_html__( 'WooCommerce', 'saasprime-essential' ),
		'icon'  => 'fas fa-archive',
	) );

	// Shop
	CSF::createSection( SAASPRIME_OPTION_KEY, array(
		'parent' => 'wdb_woo_tab',                        // The slug id of the parent section
		'icon'   => 'fas fa-archive',
		'title'  => esc_html__( 'Shop', 'saasprime-essential' ),
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Shop Settings', 'saasprime-essential' ),
			),

			array(
				'id'          => 'wdb_woo_sidebar',
				'type'        => 'select',
				'title'       => esc_html__( 'Shop Sidebar', 'saasprime-essential' ),
				'placeholder' => 'Select an option',
				'options'     => array(
					'no-sidebar'    => esc_html__( 'No sidebar', 'saasprime-essential' ),
					'left-sidebar'  => esc_html__( 'Left Sidebar', 'saasprime-essential' ),
					'right-sidebar' => esc_html__( 'Right Sidebar', 'saasprime-essential' ),
				),
				'default'     => 'left-sidebar',
			),

			array(
				'id'          => 'wdb_woo_product_sidebar',
				'type'        => 'select',
				'title'       => esc_html__( 'Product Sidebar', 'saasprime-essential' ),
				'placeholder' => 'Select an option',
				'options'     => array(
					'no-sidebar'    => esc_html__( 'No sidebar', 'saasprime-essential' ),
					'left-sidebar'  => esc_html__( 'Left Sidebar', 'saasprime-essential' ),
					'right-sidebar' => esc_html__( 'Right Sidebar', 'saasprime-essential' ),
				),
				'default'     => 'no-sidebar',
			),

			array(
				'id'          => 'wdb_product_cols',
				'type'        => 'select',
				'title'       => esc_html__( 'Product Columns', 'saasprime-essential' ),
				'placeholder' => 'Select Columns',
				'options'     => array(
					'2' => esc_html__( '2', 'saasprime-essential' ),
					'3' => esc_html__( '3', 'saasprime-essential' ),
					'4' => esc_html__( '4', 'saasprime-essential' ),
				),
				'default'     => '3',
			),

			array(
				'id'          => 'wdb_product_tb_cols',
				'type'        => 'select',
				'title'       => esc_html__( 'Product Columns in Tablet', 'saasprime-essential' ),
				'placeholder' => 'Select Columns',
				'options'     => array(
					'1' => esc_html__( '1', 'saasprime-essential' ),
					'2' => esc_html__( '2', 'saasprime-essential' ),
					'3' => esc_html__( '3', 'saasprime-essential' ),
				),
				'default'     => '2',
			),

			array(
				'id'          => 'wdb_rel_product_cols',
				'type'        => 'select',
				'title'       => esc_html__( 'Related Product Show', 'saasprime-essential' ),
				'placeholder' => 'Select Columns',
				'options'     => array(
					'2' => esc_html__( '2', 'saasprime-essential' ),
					'3' => esc_html__( '3', 'saasprime-essential' ),
					'4' => esc_html__( '4', 'saasprime-essential' ),
					'5' => esc_html__( '5', 'saasprime-essential' ),
					'6' => esc_html__( '6', 'saasprime-essential' ),
				),
				'default'     => '4',
			),

			array(
				'id'          => 'wdb_shop_thumb_size',
				'type'        => 'select',
				'title'       => esc_html__( 'Image Size', 'saasprime-essential' ),
				'placeholder' => esc_html__( 'Select Product Thumbsize', 'saasprime-essential' ),
				'options'     => saasprime_get_image_sizes(),
				'default'     => 'full',
			),


		)
	) );


	// Sidebar
	CSF::createSection( SAASPRIME_OPTION_KEY, array(
		'parent' => 'wdb_woo_tab',                        // The slug id of the parent section
		'icon'   => 'fas fa-archive',
		'title'  => esc_html__( 'Sidebar', 'saasprime-essential' ),
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Sidebar Settings', 'saasprime-essential' ),
			),
			array(
				'id'     => 'wdb_s_title_color',
				'type'   => 'color',
				'title'  => esc_html__( 'Title Color', 'saasprime-essential' ),
				'output' => '.wdb-woo--title',
			),

			array(
				'id'          => 'wdb_s_title_border',
				'type'        => 'color',
				'title'       => esc_html__( 'Border Color', 'saasprime-essential' ),
				'output_mode' => 'border-color',
				'output'      => '.wdb-woo--title',
			),

			array(
				'id'          => 'wdb_s_widget_b_radius',
				'type'        => 'spacing',
				'title'       => 'Border Radius',
				'output_mode' => 'border-radius',
				'output'      => '.wdb-woo--widget',
			),

			array(
				'id'          => 'wdb_s_widget_bg',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'saasprime-essential' ),
				'output_mode' => 'background-color',
				'output'      => '.wdb-woo--widget',
			),

		)
	) );


	// Cart
	CSF::createSection( SAASPRIME_OPTION_KEY, array(
		'parent' => 'wdb_woo_tab',                        // The slug id of the parent section
		'icon'   => 'fas fa-archive',
		'title'  => esc_html__( 'Cart', 'saasprime-essential' ),
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Cart Settings', 'saasprime-essential' ),
			),

			array(
				'id'    => 'cart_uwq_change',
				'type'  => 'switcher',
				'title' => 'Update Cart with Quantity',
			),

			array(
				'id'          => 'onsale_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Onsale Color', 'saasprime-essential' ),
				'output' => array( '.woocommerce ul.products li.product .onsale', '.single-product.woocommerce span.onsale' ),
			),

			array(
				'id'          => 'onsale_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Onsale Background Color', 'saasprime-essential' ),
				'output_mode' => 'background-color',
				'output' => array( '.woocommerce ul.products li.product .onsale', '.single-product.woocommerce span.onsale' ),
			),

		)
	) );


	// Message
	CSF::createSection( SAASPRIME_OPTION_KEY, array(
		'parent' => 'wdb_woo_tab',                        // The slug id of the parent section
		'icon'   => 'fas fa-archive',
		'title'  => esc_html__( 'Error & Message', 'saasprime-essential' ),
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Error & Messagert Settings', 'saasprime-essential' ),
			),
			array(
				'id'            => 'opt-tabbed-banner',
				'type'          => 'tabbed',
				'title'         => 'Style',
				'tabs'          => array(

					array(
						'title'     => esc_html__('Message','saasprime-essential'),
						'icon'      => '',
						'fields'    => array(
							array(
								'id'          => 'woo_msg_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Color', 'saasprime-essential' ),
								'output'      => '.woocommerce-message',
							),

							array(
								'id'          => 'woo_msg_b_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Border Color', 'saasprime-essential' ),
								'output_mode' => 'border-top-color',
								'output'      => '.woocommerce-message',
							),

							array(
								'id'          => 'woo_msg_icon_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Icon Color', 'saasprime-essential' ),
								'output'      => '.woocommerce-message::before',
							),

							array(
								'id'          => 'woo_msg_bg',
								'type'        => 'color',
								'title'       => esc_html__( 'Background Color', 'saasprime-essential' ),
								'output_mode' => 'background-color',
								'output'      => '.woocommerce-message',
							),

						)
					),

					array(
						'title'     => esc_html__('Info','saasprime-essential'),
						'icon'      => '',
						'fields'    => array(

							array(
								'id'          => 'woo_info_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Color', 'saasprime-essential' ),
								'output'      => '.woocommerce-info',
							),

							array(
								'id'          => 'woo_info_b_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Border Color', 'saasprime-essential' ),
								'output_mode' => 'border-top-color',
								'output'      => '.woocommerce-info',
							),

							array(
								'id'          => 'woo_info_icon_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Icon Color', 'saasprime-essential' ),
								'output'      => '.woocommerce-info::before',
							),

							array(
								'id'          => 'woo_info_msg_bg',
								'type'        => 'color',
								'title'       => esc_html__( 'Background Color', 'saasprime-essential' ),
								'output_mode' => 'background-color',
								'output'      => '.woocommerce-info',
							),

						)
					),

					array(
						'title'     => esc_html__('Error','saasprime-essential'),
						'icon'      => '',
						'fields'    => array(
							array(
								'id'          => 'woo_err_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Color', 'saasprime-essential' ),
								'output'      => '.woocommerce-error',
							),

							array(
								'id'          => 'woo_err_b_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Border Color', 'saasprime-essential' ),
								'output_mode' => 'border-top-color',
								'output'      => '.woocommerce-error',
							),

							array(
								'id'          => 'woo_err_icon_color',
								'type'        => 'color',
								'title'       => esc_html__( 'Icon Color', 'saasprime-essential' ),
								'output'      => '.woocommerce-error::before',
							),

							array(
								'id'          => 'woo_err_msg_bg',
								'type'        => 'color',
								'title'       => esc_html__( 'Background Color', 'saasprime-essential' ),
								'output_mode' => 'background-color',
								'output'      => '.woocommerce-error',
							),
						)
					),

				)
			),
		)
	) );