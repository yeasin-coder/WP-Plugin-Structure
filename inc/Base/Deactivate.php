<?php 

/*
* @package Practice
*/

namespace Inc\Base;

class Deactivate
{
    //activate method
    public static function deactivate(){

    
        flush_rewrite_rules();
    }
}