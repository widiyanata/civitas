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

// apply_filters('override_load_textdomain', 0, 'civitas');
//
// add_filter( 'kirki/l10n', function( $l10n ) {
//
// 	$l10n['background-color']      = esc_attr__( 'Background Color', 'civitas' );
// 	$l10n['background-image']      = esc_attr__( 'Background Image', 'civitas' );
// 	$l10n['no-repeat']             = esc_attr__( 'No Repeat', 'civitas' );
// 	$l10n['repeat-all']            = esc_attr__( 'Repeat All', 'civitas' );
// 	$l10n['repeat-x']              = esc_attr__( 'Repeat Horizontally', 'civitas' );
// 	$l10n['repeat-y']              = esc_attr__( 'Repeat Vertically', 'civitas' );
// 	$l10n['inherit']               = esc_attr__( 'Inherit', 'civitas' );
// 	$l10n['background-repeat']     = esc_attr__( 'Background Repeat', 'civitas' );
// 	$l10n['cover']                 = esc_attr__( 'Cover', 'civitas' );
// 	$l10n['contain']               = esc_attr__( 'Contain', 'civitas' );
// 	$l10n['background-size']       = esc_attr__( 'Background Size', 'civitas' );
// 	$l10n['fixed']                 = esc_attr__( 'Fixed', 'civitas' );
// 	$l10n['scroll']                = esc_attr__( 'Scroll', 'civitas' );
// 	$l10n['background-attachment'] = esc_attr__( 'Background Attachment', 'civitas' );
// 	$l10n['left-top']              = esc_attr__( 'Left Top', 'civitas' );
// 	$l10n['left-center']           = esc_attr__( 'Left Center', 'civitas' );
// 	$l10n['left-bottom']           = esc_attr__( 'Left Bottom', 'civitas' );
// 	$l10n['right-top']             = esc_attr__( 'Right Top', 'civitas' );
// 	$l10n['right-center']          = esc_attr__( 'Right Center', 'civitas' );
// 	$l10n['right-bottom']          = esc_attr__( 'Right Bottom', 'civitas' );
// 	$l10n['center-top']            = esc_attr__( 'Center Top', 'civitas' );
// 	$l10n['center-center']         = esc_attr__( 'Center Center', 'civitas' );
// 	$l10n['center-bottom']         = esc_attr__( 'Center Bottom', 'civitas' );
// 	$l10n['background-position']   = esc_attr__( 'Background Position', 'civitas' );
// 	$l10n['background-opacity']    = esc_attr__( 'Background Opacity', 'civitas' );
// 	$l10n['on']                    = esc_attr__( 'ON', 'civitas' );
// 	$l10n['off']                   = esc_attr__( 'OFF', 'civitas' );
// 	$l10n['all']                   = esc_attr__( 'All', 'civitas' );
// 	$l10n['cyrillic']              = esc_attr__( 'Cyrillic', 'civitas' );
// 	$l10n['cyrillic-ext']          = esc_attr__( 'Cyrillic Extended', 'civitas' );
// 	$l10n['devanagari']            = esc_attr__( 'Devanagari', 'civitas' );
// 	$l10n['greek']                 = esc_attr__( 'Greek', 'civitas' );
// 	$l10n['greek-ext']             = esc_attr__( 'Greek Extended', 'civitas' );
// 	$l10n['khmer']                 = esc_attr__( 'Khmer', 'civitas' );
// 	$l10n['latin']                 = esc_attr__( 'Latin', 'civitas' );
// 	$l10n['latin-ext']             = esc_attr__( 'Latin Extended', 'civitas' );
// 	$l10n['vietnamese']            = esc_attr__( 'Vietnamese', 'civitas' );
// 	$l10n['hebrew']                = esc_attr__( 'Hebrew', 'civitas' );
// 	$l10n['arabic']                = esc_attr__( 'Arabic', 'civitas' );
// 	$l10n['bengali']               = esc_attr__( 'Bengali', 'civitas' );
// 	$l10n['gujarati']              = esc_attr__( 'Gujarati', 'civitas' );
// 	$l10n['tamil']                 = esc_attr__( 'Tamil', 'civitas' );
// 	$l10n['telugu']                = esc_attr__( 'Telugu', 'civitas' );
// 	$l10n['thai']                  = esc_attr__( 'Thai', 'civitas' );
// 	$l10n['serif']                 = _x( 'Serif', 'font style', 'civitas' );
// 	$l10n['sans-serif']            = _x( 'Sans Serif', 'font style', 'civitas' );
// 	$l10n['monospace']             = _x( 'Monospace', 'font style', 'civitas' );
// 	$l10n['font-family']           = esc_attr__( 'Font Family', 'civitas' );
// 	$l10n['font-size']             = esc_attr__( 'Font Size', 'civitas' );
// 	$l10n['font-weight']           = esc_attr__( 'Font Weight', 'civitas' );
// 	$l10n['line-height']           = esc_attr__( 'Line Height', 'civitas' );
// 	$l10n['font-style']            = esc_attr__( 'Font Style', 'civitas' );
// 	$l10n['letter-spacing']        = esc_attr__( 'Letter Spacing', 'civitas' );
// 	$l10n['top']                   = esc_attr__( 'Top', 'civitas' );
// 	$l10n['bottom']                = esc_attr__( 'Bottom', 'civitas' );
// 	$l10n['left']                  = esc_attr__( 'Left', 'civitas' );
// 	$l10n['right']                 = esc_attr__( 'Right', 'civitas' );
// 	$l10n['color']                 = esc_attr__( 'Color', 'civitas' );
// 	$l10n['add-image']             = esc_attr__( 'Add Image', 'civitas' );
// 	$l10n['change-image']          = esc_attr__( 'Change Image', 'civitas' );
// 	$l10n['remove']                = esc_attr__( 'Remove', 'civitas' );
// 	$l10n['no-image-selected']     = esc_attr__( 'No Image Selected', 'civitas' );
// 	$l10n['select-font-family']    = esc_attr__( 'Select a font-family', 'civitas' );
// 	$l10n['variant']               = esc_attr__( 'Variant', 'civitas' );
// 	$l10n['subsets']               = esc_attr__( 'Subset', 'civitas' );
// 	$l10n['size']                  = esc_attr__( 'Size', 'civitas' );
// 	$l10n['height']                = esc_attr__( 'Height', 'civitas' );
// 	$l10n['spacing']               = esc_attr__( 'Spacing', 'civitas' );
// 	$l10n['ultra-light']           = esc_attr__( 'Ultra-Light 100', 'civitas' );
// 	$l10n['ultra-light-italic']    = esc_attr__( 'Ultra-Light 100 Italic', 'civitas' );
// 	$l10n['light']                 = esc_attr__( 'Light 200', 'civitas' );
// 	$l10n['light-italic']          = esc_attr__( 'Light 200 Italic', 'civitas' );
// 	$l10n['book']                  = esc_attr__( 'Book 300', 'civitas' );
// 	$l10n['book-italic']           = esc_attr__( 'Book 300 Italic', 'civitas' );
// 	$l10n['regular']               = esc_attr__( 'Normal 400', 'civitas' );
// 	$l10n['italic']                = esc_attr__( 'Normal 400 Italic', 'civitas' );
// 	$l10n['medium']                = esc_attr__( 'Medium 500', 'civitas' );
// 	$l10n['medium-italic']         = esc_attr__( 'Medium 500 Italic', 'civitas' );
// 	$l10n['semi-bold']             = esc_attr__( 'Semi-Bold 600', 'civitas' );
// 	$l10n['semi-bold-italic']      = esc_attr__( 'Semi-Bold 600 Italic', 'civitas' );
// 	$l10n['bold']                  = esc_attr__( 'Bold 700', 'civitas' );
// 	$l10n['bold-italic']           = esc_attr__( 'Bold 700 Italic', 'civitas' );
// 	$l10n['extra-bold']            = esc_attr__( 'Extra-Bold 800', 'civitas' );
// 	$l10n['extra-bold-italic']     = esc_attr__( 'Extra-Bold 800 Italic', 'civitas' );
// 	$l10n['ultra-bold']            = esc_attr__( 'Ultra-Bold 900', 'civitas' );
// 	$l10n['ultra-bold-italic']     = esc_attr__( 'Ultra-Bold 900 Italic', 'civitas' );
// 	$l10n['invalid-value']         = esc_attr__( 'Invalid Value', civitas );
//
// 	return $l10n;
//
// } );

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
			'help'        => esc_attr__( 'If logo not specified, navigation will contain website\'s name', 'civitas' ),
			'section'     => 'logo',
			'priority'    => 10,
			'default' => 'http://placehold.it/104x120',
		) );
