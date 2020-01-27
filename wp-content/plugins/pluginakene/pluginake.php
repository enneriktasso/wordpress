<?php
/**
 * Plugin Name: Pluginakene
 * Plugin URI: http://tassoennerik.ikt.khk.ee
 * Description: Minu esimene tore plugin 
 * Version: 1.0
 * Author: Enn-Erik Tasso
 * Author URI: http://tassoennerik.ikt.khk.ee
 * **/
 
 function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );