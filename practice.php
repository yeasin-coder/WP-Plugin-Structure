<?php 

/*
* @package Practice
*/

/*
* Plugin Name: Practice
* Plugin URI: https://www.example.com
* Description: Hi, I am yeasin. I am learning how to develope a wordpress plugin.
* Version: 1.0.0
* Author: Yeasin Hossain
* Author URI: https://example.com
* Licence: GPLv2 or later
* Text Domain: practice
*/

//Die if absolute path is not set
if( !defined('ABSPATH') ){
    die();
}

// defined("ABSPATH") or die('You are not allowed to acces the file');

// if( ! function_exists('add_action')){
//     echo "Please, try again . something went wrong";
//     die();
// }

//Create Practice class if class does not exists
if( file_exists( dirname(__FILE__) . '/vendor/autoload.php') ){
    require_once( dirname(__FILE__) . '/vendor/autoload.php');
}

//get the plugin name
define( 'PLUGIN_PATH', plugin_dir_path(__FILE__) );

//plugin url
define( 'PLUGIN_URL', plugin_dir_url(__FILE__) );

 if( class_exists( "Inc\\Init" )){
     Inc\Init::register_services();
}