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

 // Setup Theme.
 include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

 // Add the helper functions.
 include_once( get_stylesheet_directory() . '/lib/helper-functions.php' );

 // Add Image upload and Color select to WordPress Theme Customizer.
 require_once( get_stylesheet_directory() . '/lib/customize.php' );

 // Include Customizer CSS.
 include_once( get_stylesheet_directory() . '/lib/output.php' );
