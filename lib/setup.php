<?php
/**
 *
 *
 * @package LuggageForward\Boilerplate
 * @author  Luggage Forward
 * @license MIT
 * @link    https://github.com/kirley/boilerplate-genesis
 */

 namespace LuggageForward\Boilerplate;

 add_action( 'genesis_setup', __NAMESPACE__ . '\setup_child_theme', 15 );

/**
 * Setup child theme
 *
 * @since 1.0.0
 *
 * @param $args
 *
 * @return void
 */
function setup_child_theme(){
   // Set Localization (do not remove).
   add_action( 'after_setup_theme', __NAMESPACE__ . '\localization_setup' );
   function localization_setup(){
   	load_child_theme_textdomain( CHILD_TEXT_DOMAIN, CHILD_THEME_DIR . '/languages' );
   }

   add_theme_supports();
   add_new_image_sizes();

}

/**
 * Add theme supports
 *
 * @since 1.0.0
 *
 * @param $args
 *
 * @return void
 */
function add_theme_supports(){

  $config = array(
    'html5' => array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ),
    'genesis-accessibility' => array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ),
    'genesis-responsive-viewport' => '',
    'custom-header' => array(
     'width'           => 600,
     'height'          => 160,
     'header-selector' => '.site-title a',
     'header-text'     => false,
     'flex-height'     => true,
   ),
   'custom-background' => '',
   'genesis-after-entry-widget-area' => '',
   'genesis-footer-widgets' => 3,
   'genesis-menus' => array(
       'primary' => __( 'After Header Menu', CHILD_TEXT_DOMAIN ),
       'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN )
    )
  );

  foreach ($config as $feature => $args) {
    add_theme_support( $feature, $args );
  }
}

/**
 * Add support for new image sizes
 *
 * @since 1.0.0
 *
 * @param $args
 *
 * @return void
 */
function add_new_image_sizes() {
  $config = array(
    'featured-image' => array(
      'width'  => 720,
      'height' => 400,
      'crop'   => true,
    ),
  );

  foreach( $config as $name => $args ) {
    $crop = array_key_exists( 'crop', $args ) ? $args['crop'] : false;
    add_image_size( $name, $args['width'], $args['height'], $crop );
  }
}
