<?php
	if ( ! defined( 'PROJECT_MANAGEMENT_BUY_NOW_1' ) ) {
define('PROJECT_MANAGEMENT_BUY_NOW_1',__('https://www.misbahwp.com/products/project-management-wordpress-theme','project-management'));
}
if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'project_management_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'project-management' ),
		'section'     => 'title_tagline',
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'project-management' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'project-management' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'project_management_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'project-management' ),
	) );

	Kirki::add_section( 'project_management_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'project-management' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_all_headings_typography',
		'section'     => 'project_management_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'project_management_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'project-management' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'project-management' ),
		'section'     => 'project_management_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_body_content_typography',
		'section'     => 'project_management_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'project_management_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'project-management' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'project-management' ),
		'section'     => 'project_management_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'project_management_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'project-management' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'project_management_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'project-management' ),
	    'priority'       => 2,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_animation_enabled',
		'label'       => esc_html__( 'Turn To Show Animation', 'project-management' ),
		'section'     => 'project_management_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );

	// PANEL
	Kirki::add_panel( 'project_management_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'project-management' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'project_management_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'project-management' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'project_management_dark_colors',
	    'section'     => 'project_management_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'project-management' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'project-management' ),
		'section'     => 'project_management_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );


	// PANEL
	Kirki::add_panel( 'project_management_panel_id_3', array(
	    'priority'    => 10,
	    'title'       => esc_html__( '404 Settings / No Result', 'project-management' ),
	) );

	// 404 SECTION
	Kirki::add_section( 'project_management_section_404', array(
		'panel'          => 'project_management_panel_id_3',
	    'title'          => esc_html__( '404 Settings', 'project-management' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_section_404',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
		'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'project_management_404_heading',
	    'section'     => 'project_management_section_404',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Heading', 'project-management' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'project_management_404_page_title',
		'section'  => 'project_management_section_404',
		'default'  => esc_html__('404 Not Found', 'project-management'),
		'priority' => 10,
	] );

		Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'project_management_404_text',
	    'section'     => 'project_management_section_404',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Content', 'project-management' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'project_management_404_page_content',
		'section'  => 'project_management_section_404',
		'default'  => esc_html__('Sorry, no posts matched your criteria.', 'project-management'),
		'priority' => 10,
	] );

	// NO Result
	Kirki::add_section( 'project_management_no_result', array(
		'panel'          => 'project_management_panel_id_3',
	    'title'          => esc_html__( 'No Result Page Settings', 'project-management' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_no_result',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
		'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'project_management_not_found_heading',
	    'section'     => 'project_management_no_result',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Search Result Heading', 'project-management' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'project_management_no_results_page_title',
		'section'  => 'project_management_no_result',
		'default'  => esc_html__('404 Not Found', 'project-management'),
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'project_management_not_found_text',
	    'section'     => 'project_management_no_result',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Search Result Content', 'project-management' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'project_management_no_results_page_content',
		'section'  => 'project_management_no_result',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'project-management'),
		'priority' => 10,
	] );


	// PANEL

	Kirki::add_panel( 'project_management_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'project-management' ),
	) );

	//COLOR SECTION

	Kirki::add_section( 'project_management_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'project-management' ),
	    'panel'          => 'project_management_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_global_colors',
		'section'     => 'project_management_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'project_management_first_color',
		'label'       => __( 'Choose Your First Color', 'project-management' ),
		'section'     => 'project_management_section_color',
		'default'     => '#FB3B4D',
	] );

	// Additional Settings

	Kirki::add_section( 'project_management_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'project-management' ),
	    'panel'          => 'project_management_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'project_management_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'project-management' ),
			'Center' => esc_html__( 'Center', 'project-management' ),
			'Right'  => esc_html__( 'Right', 'project-management' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'project_management_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'project-management' ),
		'section'  => 'project_management_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_project_management',
		'label'       => esc_html__( 'Menus Text Transform', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'project-management' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'project-management' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'project-management' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default' => 'Zoom Out',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Zoomout' => __('Zoom Out','project-management'),
            'Zoominn' => __('Zoom Inn','project-management'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'project_management_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_preloader_type',
		'label'       => esc_html__( 'Preloader Type', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default' => 'four-way-loader',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'four-way-loader' => __('Type 1','project-management'),
            'cube-loader' => __('Type 2','project-management'),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'project-management' ),
		'section'     => 'project_management_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','project-management'),
            'Right Sidebar' => __('Right Sidebar','project-management'),
            'One Column' => __('One Column','project-management')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'project_management_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'project-management' ),
			'panel'          => 'project_management_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'project-management' ),
		'section'     => 'project_management_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'project-management' ),
		'section'     => 'project_management_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'project-management' ),
		'section'     => 'project_management_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'project_management_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'project-management' ),
			'section'  => 'project_management_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'project_management_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'project-management' ),
			'section'  => 'project_management_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'project-management' ),
		'section'  => 'project_management_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'project-management' ),
		'section'  => 'project_management_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'project-management' ),
		'section'     => 'project_management_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','project-management'),
            'Right Sidebar' => __('Right Sidebar','project-management')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'project-management' ),
		'section'     => 'project_management_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','project-management'),
            'Right Sidebar' => __('Right Sidebar','project-management')
		],
	] );

	new \Kirki\Field\Radio_Buttonset( [
		'settings'    => 'project_management_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'project-management' ),
		'section'     => 'project_management_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'project-management' ),
			'Center' => esc_html__( 'Center', 'project-management' ),
			'Right'  => esc_html__( 'Right', 'project-management' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'project_management_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'project-management' ),
	    'panel'          => 'project_management_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'project_management_archive_element_sortable',
		'label'    => __( 'Archive Post Page Element Reordering', 'project-management' ),
		'description'    => esc_html__( 'This setting is not favorable with post format.', 'project-management' ),
		'section'  => 'project_management_section_post',
		'default'  => [ 'option1', 'option2', 'option3', 'option4', 'option5' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Image', 'project-management' ),
			'option2' => esc_html__( 'Post Meta', 'project-management' ),
			'option3' => esc_html__( 'Post Title', 'project-management' ),
			'option4' => esc_html__( 'Post Content', 'project-management' ),
			'option5' => esc_html__( 'Post Categories', 'project-management' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'project_management_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'project-management' ),
		'section'     => 'project_management_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'project_management_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'project-management' ),
		'section'     => 'project_management_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'project-management' ),
		'section'     => 'project_management_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','project-management'),
            'Right Sidebar' => __('Right Sidebar','project-management'),
            'Three Column' => __('Three Column','project-management'),
            'Four Column' => __('Four Column','project-management'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','project-management'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','project-management'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','project-management')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'project-management' ),
		'section'     => 'project_management_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','project-management'),
            'Right Sidebar' => __('Right Sidebar','project-management'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'project-management' ),
		'section'     => 'project_management_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','project-management'),
            'Right Sidebar' => __('Right Sidebar','project-management'),
            'Three Column' => __('Three Column','project-management'),
            'Four Column' => __('Four Column','project-management'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','project-management'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','project-management'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','project-management')
		],
	] );

	// Breadcrumb
	Kirki::add_section( 'project_management_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'project-management' ),
	    'panel'          => 'project_management_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_enable_breadcrumb_heading',
		'section'     => 'project_management_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'project-management' ),
		'section'     => 'project_management_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'project_management_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'project-management' ),
        'section'  => 'project_management_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'project_management_header_section', array(
        'title'          => esc_html__( 'Header Settings', 'project-management' ),
        'panel'          => 'project_management_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_header_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_header_button_heading',
		'section'     => 'project_management_header_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button',  'project-management' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'settings' => 'project_management_header_button' ,
        'section'  => 'project_management_header_section',
    ] );

	// SLIDER SECTION

	Kirki::add_section( 'project_management_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'project-management' ),
        'panel'          => 'project_management_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_enable_heading',
		'section'     => 'project_management_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'project-management' ),
		'section'     => 'project_management_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_slider_heading',
		'section'     => 'project_management_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Image(
		[
			'settings'    => 'project_management_slider_banner_image',
			'label'       => esc_html__( 'Upload Slider Image', 'project-management' ),
			'section'     => 'project_management_blog_slide_section',
			'default'     => '',
		]
	);

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'project_management_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'project-management' ),
		'section'     => 'project_management_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 3,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'project_management_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'project-management' ),
		'section'     => 'project_management_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'project-management' ),
		'priority'    => 10,
		'choices'     => project_management_get_categories_select(),
	] );

	// TESTIMONIAL SECTION

	Kirki::add_section( 'project_management_testimonial_section', array(
	    'title'          => esc_html__( 'Testimonial Settings', 'project-management' ),
	    'panel'          => 'project_management_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_testimonial_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	    'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_enable_heading',
		'section'     => 'project_management_testimonial_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Testimonials',  'project-management' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_testimonial_section_enable',
		'section'     => 'project_management_testimonial_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'project-management' ),
			'off' => esc_html__( 'Disable',  'project-management' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_testimonial_main_heading',
		'section'     => 'project_management_testimonial_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Testimonial Section Heading',  'project-management' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'       => esc_html__( 'Short Heading', 'project-management' ),
        'settings' => 'project_management_testimonial_heading_text' ,
        'section'  => 'project_management_testimonial_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'       => esc_html__( 'Heading', 'project-management' ),
        'settings' => 'project_management_testimonial_heading' ,
        'section'  => 'project_management_testimonial_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_number_heading',
		'section'     => 'project_management_testimonial_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number of testimonials to show','project-management' ) . '</h3>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'project_management_testimonial_count',
		'section'     => 'project_management_testimonial_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	$project_management_testimonial_count = get_theme_mod('project_management_testimonial_count');

	for ($i=1; $i <= $project_management_testimonial_count; $i++) { 
		
		Kirki::add_field( 'theme_config_id', [
			'type'        => 'custom',
			'settings'    => 'project_management_testimonial_heading'.$i,
			'section'     => 'project_management_testimonial_section',
				'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Testimonials 0','project-management' ).$i . '</h3>',
		] );

		new \Kirki\Field\Image(
			[
				'settings'    => 'project_management_testimonial_image'.$i,
				'label'       => esc_html__( 'Client Image 0', 'project-management' ).$i,
				'section'     => 'project_management_testimonial_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'project_management_testimonial_text'.$i,
				'label'    => esc_html__( 'Client Review 0', 'project-management' ).$i,
				'section'  => 'project_management_testimonial_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'project_management_testimonial_name'.$i,
				'label'    => esc_html__( 'Client Name 0', 'project-management' ).$i,
				'section'  => 'project_management_testimonial_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'project_management_testimonial_designation'.$i,
				'label'    => esc_html__( 'Client Designation 0', 'project-management' ).$i,
				'section'  => 'project_management_testimonial_section',
			]
		);

	}

	// FOOTER SECTION

	Kirki::add_section( 'project_management_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'project-management' ),
        'panel'          => 'project_management_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'project-management' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( PROJECT_MANAGEMENT_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'project-management' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'project_management_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'project-management' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_footer_enable_heading',
		'section'     => 'project_management_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'project_management_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'project-management' ),
		'section'     => 'project_management_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'project-management' ),
			'off' => esc_html__( 'Disable', 'project-management' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'project_management_footer_text_heading',
		'section'     => 'project_management_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'project-management' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'project_management_footer_text',
		'section'  => 'project_management_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'project_management_footer_text_heading_2',
	'section'     => 'project_management_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'project-management' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'project_management_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'project-management' ),
		'section'     => 'project_management_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'project-management' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'project-management' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'project-management' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'project-management' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'project_management_footer_text_heading_1',
	'section'     => 'project_management_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'project-management' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'color',
	'settings'    => 'project_management_copyright_bg',
	'label'       => __( 'Choose Your Copyright Background Color', 'project-management' ),
	'section'     => 'project_management_footer_section',
	'default'     => '',
] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'project_management_enable_footer_socail_link',
	'section'     => 'project_management_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'project-management' ) . '</h3>',
	'priority'    => 11,
] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'section'     => 'project_management_footer_section',
	'priority'    => 11,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Footer Social Icon', 'project-management' ),
		'field' => 'link_text',
	],
	'button_label' => esc_html__('Add New Social Icon', 'project-management' ),
	'settings'     => 'project_management_footer_social_links_settings',
	'default'      => '',
	'fields' 	   => [
		'link_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Icon', 'project-management' ),
			'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'project-management' ),
			'default'     => '',
		],
		'link_url' => [
			'type'        => 'url',
			'label'       => esc_html__( 'Social Link', 'project-management' ),
			'description' => esc_html__( 'Add the social icon url here.', 'project-management' ),
			'default'     => '',
		],
	],
	'choices' => [
		'limit' => 5
	],
] );
}