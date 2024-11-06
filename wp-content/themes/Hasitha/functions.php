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
  //  wp_enqueue_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    //assets folder added to the theme folder to keep all the files and style sheets
    //javascript file will be added as below  (path to the file name should be provided and if the js script should be added at the bottom of the index it should be marked
   // as true, if it should be added to header, it should be marked as false )
    //wp_enqueue_script('main-js',get_template_directory_uri().'/assets/main.js',[], filemtime(get_template_directory().'/assets/main.js'), true);

//alternative method to the above enqueue procedure
// wp_register_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
// wp_enqueue_style('style-css');
//wp_register_style is important at the times we have to use wp_enqueue conditionally.
//eg. when we have to enqueue scripts only for a certain page. etc..So using the we_register_style initially is the best practise

//Register Styles
wp_register_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
wp_register_style('bootstrap-css',get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',[], false ,'all');

//Register Scripts
wp_register_script( 'main-js',get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js' ), true);
wp_register_script( 'bootstrap-js',get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false , true);

//Enqueue Styles
wp_enqueue_style('style-css');
wp_enqueue_style('bootstrap-css');

//Enqueue Scripts
wp_enqueue_script('main-js');
wp_enqueue_script('bootstrap-js');

}
add_action('wp_enqueue_scripts','hasitha_enqueue_scripts');
?>