<?php
/**
 *
 * Comments HTML markup structure
 *
 * @package LuggageForward\Boilerplate
 * @author  Luggage Forward
 * @license MIT
 * @link    https://github.com/kirley/boilerplate-genesis
 */

 namespace LuggageForward\Boilerplate;

 add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\setup_comments_gravatar' );
 /**
  * Modify size of the Gravatar in the entry comments.
  *
  * @since 1.0.0
  *
  * @param array $args
  *
  * @return array
  */
 function setup_comments_gravatar( $args ) {

 	$args['avatar_size'] = 60;

 	return $args;

 }
