<?php
/**
 * Bootstraps the Theme
 * 
 * @package Hasitha
 */

namespace HASITHA_THEME\Inc;

use HASITHA_THEME\Inc\Traits\Singleton;

class HASITHA_THEME {

    use Singleton;

   protected function __construct(){
    // wp_die('Hello');

    //load other classes
    $this->set_hooks();
   } 

   protected function set_hooks(){
    //actions and filters
   }
}