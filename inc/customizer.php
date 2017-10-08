<?php
/**
 * civitas Theme Customizer
 *
 * @package civitas
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function civitas_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'civitas_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'civitas_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'civitas_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function civitas_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function civitas_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function civitas_customize_preview_js() {
	wp_enqueue_script( 'civitas-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'civitas_customize_preview_js' );

/**
 * Add Kirki Configuration
 */
Wd_Civitas::add_config( 'civitas', array(
	'option_type' => 'theme_mod',
	'capability' => 'edit_theme_options',
) );

/**
 * Add Panel Frontpage
 */
Wd_Civitas::add_panel( 'front', array(
	'title' => __( 'Front Page Setting', 'civitas'),
	'capability' => 'edit_theme_options',
	'priority' => 1,
) );

/**
 * Add the Section in Customizer for Frontpage
 */

# Logo Section
Wd_Civitas::add_section( 'logo', array(
	'title'      => esc_attr__( 'Logo', 'civitas' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
	'panel' => 'front',
) );

/**
*	LOGO
*	Add Field to Logo
*/
		Wd_Civitas::add_field( 'civitas', array(
			'type'        => 'image',
			'settings'    => 'logo',
			'label'       => esc_attr__( 'logo', 'civitas' ),
			'description' => esc_attr__( 'Your Logo', 'civitas' ),
			'help'        => esc_attr__( 'If logo not specified, navigation will contain website\'s name but not displayed, only for screen reader', 'civitas' ),
			'section'     => 'logo',
			'priority'    => 10,
			// 'default' => 'http://placehold.it/104x120',
		) );

/**
 * Add Panel Header Options
 */
Wd_Civitas::add_panel( 'header_options', array(
	'title' => __( 'Header Options', 'civitas'),
	'capability' => 'edit_theme_options',
	'priority' => 1,
) );

/**
 * Add the Section in Customizer for Frontpage
 */

	# Navbar Section
	Wd_Civitas::add_section( 'navbar', array(
		'title'      => esc_attr__( 'Navbar Options', 'civitas' ),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel' => 'header_options',
	) );

	/**
	*	Header Options Fields
	*/

	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'toggle',
		'settings'    => 'top_menu',
		'label'       => esc_attr__( 'Display Top Bar Menu', 'civitas' ),
		'section'     => 'navbar',
		'default'     => '1',
		'priority'    => 10,
	) );

	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'logo_position',
		'label'       => esc_attr__( 'Navbar Logo Position', 'civitas' ),
		'section'     => 'navbar',
		'default'     => 'left',
		'priority'    => 10,
		'choices'     => array(
			'left'   => esc_attr__( 'Left', 'civitas' ),
			'center' => esc_attr__( 'Center', 'civitas' ),
		),
	) );

	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'navbar_link_position',
		'label'       => __( 'Navbar Link Position', 'civitas' ),
		'section'     => 'navbar',
		'default'     => 'right',
		'priority'    => 10,
		'choices'     => array(
			'left'   => esc_attr__( 'Left', 'civitas' ),
			'right' => esc_attr__( 'Right', 'civitas' ),
		),
	) );

	# Breaking News Section
	Wd_Civitas::add_section( 'breaking_news', array(
		'title'      => esc_attr__( 'Breaking News Options', 'civitas' ),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel' => 'header_options',
	) );

	/**
	*	Breaking News Options Fields
	*/

	# Show Breaking News?
	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'toggle',
		'settings'    => 'breaking_news_show',
		'label'       => esc_attr__( 'Show breaking news?', 'civitas' ),
		'section'     => 'breaking_news',
		'default'     => '0',
		'priority'    => 10,
	) );

	# Breaking news title
	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'text',
		'settings'    => 'breaking_news_title',
		'label'       => esc_attr__( 'Breaking News Title', 'civitas' ),
		'section'     => 'breaking_news',
		'default'     => 'Breaking News',
		'priority'    => 10,
	) );

	# showing post by
	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'breaking_news_option',
		'label'       => __( 'Show posts by:', 'civitas' ),
		'section'     => 'breaking_news',
		'default'     => 'category',
		'priority'    => 10,
		'choices'     => array(
			'latest'   => esc_attr__( 'Latest', 'civitas' ),
			'category' => esc_attr__( 'Category', 'civitas' ),
		),
	) );

	# Breaking news select post to display
	Wd_Civitas::add_field( 'civitas', array(
		'type'        => 'select',
		'settings'    => 'breaking_news_posts',
		'label'       => esc_attr__( 'Breaking News Post', 'civitas' ),
		'help'				=> esc_attr__( 'Posts to display in breaking news'),
		'section'     => 'breaking_news',
		'default'     => 1,
		'priority'    => 10,
		'choices'			=> Kirki_Helper::get_terms( 'category' ),
		'active_callback' => 'bn_category',
	) );

	# Function to display field by value in breaking_news_option
	// function bn_latest( $control ) {
	//     if ( $control->manager->get_setting('breaking_news_option')->value() == 'latest' ) {
	//         return true;
	//     } else {
	//         return false;
	//     }
	// }
	function bn_category( $control ) {
	    if ( $control->manager->get_setting('breaking_news_option')->value() == 'category' ) {
	        return true;
	    } else {
	        return false;
	    }
	}

/**
 * Add Panel Ads Manager
 */
Wd_Civitas::add_panel( 'ads_manager', array(
	'title' => __( 'Ads Manager', 'civitas'),
	'capability' => 'edit_theme_options',
	'priority' => 1,
) );

	# Ads options Section
	Wd_Civitas::add_section( 'ads_options', array(
		'title'      => esc_attr__( 'Ads Options', 'civitas' ),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel' => 'ads_manager',
	) );

		# Show header ads
		Wd_Civitas::add_field( 'civitas', array(
			'type'        => 'toggle',
			'settings'    => 'ads_header',
			'label'       => esc_attr__( 'Show ads on header?', 'civitas' ),
			'section'     => 'ads_options',
			'default'     => '0',
			'priority'    => 10,
		) );

		# Ads image or script
		Wd_Civitas::add_field( 'civitas', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'ads_tipe',
			'label'       => esc_attr__( 'Ads tipe:', 'civitas' ),
			'section'     => 'ads_options',
			// 'default'     => 'script',
			'priority'    => 10,
			'choices'     => array(
				'image'   => esc_attr__( 'Image', 'civitas' ),
				'script' => esc_attr__( 'Script', 'civitas' ),
			),
			'active_callback' => 'ads_tipe',
		) );

		# Ads header image
		Wd_Civitas::add_field( 'civitas', array(
			'type'        => 'image',
			'settings'    => 'ads_header_image',
			'label'       => esc_attr__( 'Ads image', 'civitas' ),
			'section'     => 'ads_options',
			'priority'    => 10,
			'default' => 'http://placehold.it/600x120',
			'active_callback' => 'ads_image',
		) );

		# Ads header image
		Wd_Civitas::add_field( 'civitas', array(
			'type'        => 'textarea',
			'settings'    => 'ads_header_script',
			'label'       => esc_attr__( 'Ads script', 'civitas' ),
			'section'     => 'ads_options',
			'priority'    => 10,
			'default' => 'Script ads, ex: javascript from google adsense or other ads provider',
			'active_callback' => 'ads_script',
		) );

		function ads_tipe( $control ) {
		   return $control->manager->get_setting('ads_header')->value() == '1' ?  true :  false;
		}
		function ads_image( $control ) {
			return $control->manager->get_setting('ads_tipe')->value() == 'image' ?  true :  false;
		}
		function ads_script( $control ) {
			return $control->manager->get_setting('ads_tipe')->value() == 'script' ?  true :  false;
		}
