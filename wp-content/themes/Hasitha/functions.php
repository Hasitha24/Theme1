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
//here we added all for every kind of media.Now whenever the style.css file changes, the version number which is obtained by fileemtime will be changed to a newer version.
    wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    //assets folder added to the theme folder to keep all the files and style sheets
    //script will be added as below
    wp_enqueue_script();
}
add_action('wp_enqueue_scripts','hasitha_enqueue_scripts');
?>