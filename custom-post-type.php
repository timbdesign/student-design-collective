<?php
/*
Plugin Name: Calendar Items for SDC Website
Description: Custom Post Type for "Student Design Collective" website.
Author: Tim Brown
Author URI: http://www.timbdesign.com
*/

add_action( 'init', 'sdc_calendar_cpt' );

function sdc_calendar_cpt() {

register_post_type( 'event', array(
  'labels' => array(
    'name' => 'SDC Events',
    'singular_name' => 'Event',
   ),
  'description' => 'Events we will be sharing on this site.',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));
}
