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

 /**
  * Initialize theme constants
  *
  * @since 1.0.0
  *
  * @param $args
  *
  * @return void
  */
 function init_constants() {

   $theme = wp_get_theme();

   define( 'CHILD_THEME_NAME', $theme->get( 'Name' ) );
   define( 'CHILD_THEME_URL', $theme->get( 'ThemeURI' ) );
   define( 'CHILD_THEME_VERSION', $theme->get( 'Version' ) );
   define( 'CHILD_TEXT_DOMAIN', $theme->get( 'TextDomain' ) );
   define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
   define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );

 }

 init_constants();
