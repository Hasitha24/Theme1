<?php
/**
 * Header File
 * 
 * @package Hasitha
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress Theme</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<!-- A function should be checked if it exists prior to use it.Use the below
 method to check if wp_body_open() exists, so that all 
 the uses who use lower wp versions can also use your code -->

<?php

if (function_exists('wp_body_open')){
    wp_body_open();
}
 ?>
<header>Header</header>