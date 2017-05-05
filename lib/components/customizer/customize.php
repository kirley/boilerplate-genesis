<?php
/**
 * This file adds the Customizer additions to the Theme.
 *
 * @package LuggageForward\Boilerplate
 * @author  Luggage Forward
 * @license MIT
 * @link    https://github.com/kirley/boilerplate-genesis
 */

 namespace LuggageForward\Boilerplate;

 use WP_Customize_Color_Control;
 

add_action( 'customize_register', __NAMESPACE__ .'\register_with_customizer' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function register_with_customizer( $wp_customize ) {

	$wp_customize->add_setting(
		'boilerplate_link_color',
		array(
			'default'           => get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'boilerplate_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', CHILD_TEXT_DOMAIN ),
				'label'       => __( 'Link Color', CHILD_TEXT_DOMAIN ),
				'section'     => 'colors',
				'settings'    => 'boilerplate_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'boilerplate_accent_color',
		array(
			'default'           => get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'boilerplate_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', CHILD_TEXT_DOMAIN ),
				'label'       => __( 'Accent Color', CHILD_TEXT_DOMAIN ),
				'section'     => 'colors',
				'settings'    => 'boilerplate_accent_color',
			)
		)
	);

}
