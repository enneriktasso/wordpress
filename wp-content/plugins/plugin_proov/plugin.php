<?php
/**
 * Plugin Name: Plugin 
 * Plugin URI: http://tassoennerik.ikt.khk.ee
 * Description: Minu esimene tore plugin 
 * Version: 1.0
 * Author: Enn-Erik Tasso
 * Author URI: http://tassoennerik.ikt.khk.ee/wordpress/
 **/
 


function my_plugin_test() {
  echo 'hello world'; exit;
}
 add_action( 'wp_footer', 'my_function_test' );