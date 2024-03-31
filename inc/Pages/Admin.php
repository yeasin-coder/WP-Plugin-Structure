<?php 


/*
* @package Practice
*/

namespace Inc\Pages;

class Admin{

	public function __construct(){
		
	}

	public function register(){
		add_action( 'admin_menu', array($this, 'add_admin_page') );
	}

	public function add_admin_page(){

            /*
                the first option is: Page title
                Second option is: Menu title (it will visible at wordpress dashboard)
                Third option is: Capability (manage_options means only access by admin)
                Fourth optin is: page slug, a unique name
                fifth option is: a callback function,
                sixth option is: Menu icon
                the last optin is: Menu positing in integer or float
            */
            add_menu_page("Practice Plugin", "Practice", "manage_options", "practice_plugin", array($this, "admin_index"), 'dashicons-store', 110);
    }

    public function admin_index(){
        //add the content of the 'Practice' admin page
        require_once( PLUGIN_PATH . 'templates/admin.php' );
    }
}