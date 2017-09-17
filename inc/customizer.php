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

// Logo Section
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
