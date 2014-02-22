<?php
/*
Plugin Name: Bookworm Blog Custom Post Types
Description: Custom Post Types for "The Bookworm Blog" website.
Author: Tracy Rotton
Author URI: http://www.taupecat.com
*/

add_action( 'init', 'bookworm_blog_cpt' );

function bookworm_blog_cpt() {

register_post_type( 'book', array(
  'labels' => array(
    'name' => 'Books',
    'singular_name' => 'Book',
   ),
  'description' => 'Books which we will be discussing on this blog.',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));
}
