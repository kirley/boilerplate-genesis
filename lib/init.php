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

 function init_constants() {

   $theme = wp_get_theme();

   define( 'CHILD_THEME_NAME', $theme->get( 'Name' ) );
   define( 'CHILD_THEME_URL', $theme->get( 'ThemeURI' ) );
   define( 'CHILD_THEME_VERSION', $theme->get( 'Version' ) );

 }

 init_constants();
