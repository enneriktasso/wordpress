<?php
/**
 * Plugin Name: Very First Plugin 
 * Plugin URI: http://tassoennerik.ikt.khk.ee
 * Description: Minu esimene tore plugin 
 * Version: 1.0
 * Author: Enn-Erik Tasso
 * Author URI: http://tassoennerik.ikt.khk.ee/wordpress/
 **/
 
 add_action( 'wp_footer', 'my_function' );

function my_function() {
  echo 'hello world';
}