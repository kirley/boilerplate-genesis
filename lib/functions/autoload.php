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
 include_once( CHILD_THEME_DIR . '/lib/theme-defaults.php' );

 // Add the helper functions.
 include_once( CHILD_THEME_DIR . '/lib/components/customizer/helper-functions.php' );

 // Add Image upload and Color select to WordPress Theme Customizer.
 require_once( CHILD_THEME_DIR . '/lib/components/customizer/customize.php' );

 // Include Customizer CSS.
 include_once( CHILD_THEME_DIR . '/lib/components/customizer/output.php' );
