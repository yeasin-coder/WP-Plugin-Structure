<?php 

/*
* @package Practice
*/

namespace Inc\Base;

use Inc\Base\BaseController;

class Enqueue extends BaseController
{
    //register method
    public function register(){
        add_action( "admin_enqueue_scripts", array($this, "enqueue") );
    }
    
    //Enqueue styles and scripts
        public function enqueue(){
            //enqueue styles
            wp_enqueue_style('pluginStyle', $this->plugin_url . 'assets/style.css');

            //enqueue scripts
            wp_enqueue_script('pluginscript', $this->plugin_url . 'assets/script.js');
        }
}