<?php 

/*
* @package Practice
*/

namespace Inc\Base;

class Activate
{
    //activate method
    public static function activate(){

    
        flush_rewrite_rules();
    }
}