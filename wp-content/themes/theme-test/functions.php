<?php

/**
 * Theme Test functions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme Test
 */

 function theme_tst_scripts(){
   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.5.0', true );
  //  wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
   wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(),'4.5.0','all' );

   wp_enqueue_style( 'theme-test-style', get_stylesheet_uri(), array() ,filemtime(get_template_directory() . '/style.css' ) , 'all' );
 }

 add_action( 'wp_enqueue_scripts', 'theme_tst_scripts' );
