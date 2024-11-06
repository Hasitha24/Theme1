<?php
/**
 * Theme Functions
 * 
 * @package Hasitha
 */

// echo '<pre>';
// print_r(filemtime(get_template_directory().'/style.css'));
// wp_die();

function hasitha_enqueue_scripts(){

    wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
}
add_action('wp_enqueue_scripts','hasitha_enqueue_scripts');
?>