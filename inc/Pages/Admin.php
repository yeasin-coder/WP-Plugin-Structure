<?php 


/*
* @package Practice
*/

namespace Inc\Pages;

use Inc\Base\BaseController;
use Inc\Api\SettingsApi;

class Admin extends BaseController{

    public $settings;

	public function __construct(){
		$this->settings = new SettingsApi();
	}

	public function register(){
		//add_action( 'admin_menu', array($this, 'add_admin_page') );

        $pages = [

            [
            "page_title" => "Practice Plugin",
            "menu_title" => "Practice",
            "capability" => "manage_options",
            "menu_slug" => "practice_plugin",
            "callback" => function (){echo "<h1>Hello Plugin </h1>"; },
            "icon_url" => "dashicons-store",
            "position" => 110
            ],

            [
            "page_title" => "Practice Event",
            "menu_title" => "Event",
            "capability" => "manage_options",
            "menu_slug" => "practice_event",
            "callback" => function (){echo "<h1>Hello Even </h1>"; },
            "icon_url" => "dashicons-home",
            "position" => 111
            ]
        ];

        $this->settings->add_pages( $pages )->register();
	}

	// public function add_admin_page(){

    //         /*
    //             the first option is: Page title
    //             Second option is: Menu title (it will visible at wordpress dashboard)
    //             Third option is: Capability (manage_options means only access by admin)
    //             Fourth optin is: page slug, a unique name
    //             fifth option is: a callback function,
    //             sixth option is: Menu icon
    //             the last optin is: Menu positing in integer or float
    //         */
    //         add_menu_page("Practice Plugin", "Practice", "manage_options", "practice_plugin", array($this, "admin_index"), 'dashicons-store', 110);
    // }

    // public function admin_index(){
    //     //add the content of the 'Practice' admin page
    //     require_once( $this->plugin_path . 'templates/admin.php' );
    // }
}