<?php
/**
 *
 * Post HTML markup structure
 *
 * @package LuggageForward\Boilerplate
 * @author  Luggage Forward
 * @license MIT
 * @link    https://github.com/kirley/boilerplate-genesis
 */

 namespace LuggageForward\Boilerplate;

 add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size' );
 /**
  * Modify size of the Gravatar in the author box.
  *
  * @since 1.0.0
  *
  * @param $size
  *
  * @return int
  */
 function setup_author_box_gravatar_size( $size ) {
 	return 90;
 }
