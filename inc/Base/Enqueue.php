<?php 

/*
* @package Practice
*/

namespace Inc\Base;

class Enqueue
{
    //register method
    public function register(){
        add_action( "admin_enqueue_scripts", array($this, "enqueue") );
    }
    
    //Enqueue styles and scripts
        public function enqueue(){
            //enqueue styles
            wp_enqueue_style('pluginStyle', PLUGIN_URL . 'assets/style.css');

            //enqueue scripts
            wp_enqueue_script('pluginscript', PLUGIN_URL . 'assets/script.js');
        }
}