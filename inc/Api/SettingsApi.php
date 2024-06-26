<?php


/*
* @package Practice
*/

namespace Inc\Api;

class SettingsApi{

    public $admin_pages = [];

    public function register(){
        if( ! empty( $this->admin_pages ) ){
            add_action( "admin_menu", array( $this, "add_admin_menu"));
        }
    }


    public function add_admin_menu(){

        foreach( $this->admin_pages as $page){
            add_menu_page( $page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position'] );
        }
    }

    //add pages
    public function add_pages( array $pages){
        $this->admin_pages = $pages;

        return $this;
    }
}

