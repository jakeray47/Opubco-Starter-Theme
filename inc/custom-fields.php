<?php

require_once( trailingslashit( get_template_directory() ). 'inc/cmb/custom-meta-boxes.php' );


/*------------------------------------*\
    Slider
\*------------------------------------*/

function slider_options( array $meta_boxes ) {
  
  $fields = array(

  		array( 'id' => 'slider-text',  'name' => 'Slider Text', 'type' => 'textarea', 'desc' => 'Place text content of Slider here!' ),
  		array( 'id' => 'slider-button',  'name' => 'Slider Button Link', 'type' => 'text', 'placeholder' => 'Place link URL here!' ),
  		array( 'id' => 'slider-button-text',  'name' => 'Slider Button Text', 'type' => 'text', 'placeholder' => 'Place button text here!' ),

  );

  $meta_boxes[] = array(
    'title' => 'Slider Options',
    'pages' => 'slider',
    'fields' => $fields
  );


  return $meta_boxes;

}

add_filter( 'cmb_meta_boxes', 'slider_options' );


/*------------------------------------*\
   Custom Fields
\*------------------------------------*/


function custom_h1_field( array $meta_boxes ) {
  
  $fields = array(

  		array( 'id' => 'custom_h1',  'name' => 'Custom H1', 'type' => 'text', 'placeholder' => 'Place your custom title here!' )
  );

  $meta_boxes[] = array(
    'title' => 'Custom h1',
    'pages' =>  array('post','page' ),
    'fields' => $fields
  );


  return $meta_boxes;

}

add_filter( 'cmb_meta_boxes', 'custom_h1_field' );



/*------------------------------------*\
   Featured Posts
\*------------------------------------*/


function feature_this_post( array $meta_boxes ) {
  
  $fields = array(

      array( 'id' => 'featured_post',  'name' => 'Featured Post', 'type' => 'checkbox', 'desc' => 'Make this post Featured.' ),
  );

  $meta_boxes[] = array(
    'title' => 'Featured Post',
    'pages' =>  array('post','events','artists','artwork' ),
    'context' => 'side',
    'priority' => 'high',
    'fields' => $fields
  );


  return $meta_boxes;

}

add_filter( 'cmb_meta_boxes', 'feature_this_post' );

