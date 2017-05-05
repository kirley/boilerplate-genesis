<?php
/**
 * Asset loader handler
 *
 * @package LuggageForward\Boilerplate
 * @author  Luggage Forward
 * @license MIT
 * @link    https://github.com/kirley/boilerplate-genesis
 */

 namespace LuggageForward\Boilerplate;

 // Enqueue Scripts and Styles.
 add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts_styles' );

 function enqueue_scripts_styles() {

 	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
 	wp_enqueue_style( 'dashicons' );

 	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
 	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
 	wp_localize_script(
 		CHILD_TEXT_DOMAINf . '-responsive-menu',
 		'genesis_responsive_menu',
 		responsive_menu_settings()
 	);

 }

 /**
  * Define our responsive menu settings.
  *
  * @since 1.0.0
  *
  * @param $args
  *
  * @return void
  */
 function responsive_menu_settings() {

  $settings = array(
    'mainMenu'          => __( 'Menu', CHILD_TEXT_DOMAIN ),
    'menuIconClass'     => 'dashicons-before dashicons-menu',
    'subMenu'           => __( 'Submenu', CHILD_TEXT_DOMAIN ),
    'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
    'menuClasses'       => array(
      'combine' => array(
        '.nav-primary',
        '.nav-header',
      ),
      'others'  => array(),
    ),
  );

  return $settings;

 }
