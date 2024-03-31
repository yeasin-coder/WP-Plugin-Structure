<?php

/*
* @package Practice
*/

namespace Inc;

final class Init{

	public function __construct(){

	}

	// //get all classes and return them as an array
	public static function get_services(){
		return [
	    	Pages\Admin::class,
	 		Base\Enqueue::class,
			Base\SettingsLinks::class 
		];
	}

	
	public static function register_services(){

	 	foreach(self::get_services() as $class){
			$service = self::instantiate( $class );

	 		if(method_exists($service, 'register')){
	 			$service -> register();
	 		}
 		}

	 }


	 private static function instantiate($class){
	 	return new $class();
	}


}
// //using the 'Inc' namespace
// use Inc\Activate;
// use Inc\Deactivate;

// use Inc\admin\Admin;

// if( ! class_exists( 'Practice' )){
//     Class Practice{


//         public $plugin;
//         //constructor function 
//         public function __construct(){

//             //plugin url. plugin_basename function returns the name of the plugin
//             $this->plugin = plugin_basename(__FILE__);

//             //create a custom post type while plugin activation
//             add_action('init', array($this, 'custom_post_type'));
//         }


//         //load style and scripts with the 'register' method
//         public function register(){
//             add_action('admin_enqueue_scripts', array($this, 'enqueue'));

//             //wordpress default admin menu
//             add_action( 'admin_menu', array($this, 'add_admin_page'));


//             add_filter("plugin_action_links_".$this->plugin, array($this,'settings_link'));

            
//         }


//         //links in under the plugin name
//         public function settings_link($links){
//             $settings_link = "<a href='options_general.php?page=practice_plugin'>Setting</a>";

//             array_push($links, $settings_link);

//             return $links;
//         }

//         public function add_admin_page(){

//             /*
//                 the first option is: Page title
//                 Second option is: Menu title (it will visible at wordpress dashboard)
//                 Third option is: Capability (manage_options means only access by admin)
//                 Fourth optin is: page slug, a unique name
//                 fifth option is: a callback function,
//                 sixth option is: Menu icon
//                 the last optin is: Menu positing in integer or float
//             */
//             add_menu_page("Practice Plugin", "Practice", "manage_options", "practice_plugin", array($this, "admin_index"), 'dashicons-store', 110);
//         }

//         public function admin_index(){
//             //add the content of the 'Practice' admin page
//             require_once( plugin_dir_path(__FILE__) . 'templates/admin.php' );
//         }


//         //create a custom post type method
//         public function custom_post_type(){
//             register_post_type('book', ['public' => true, 'label' => 'Books']);
//         }


//         //Enqueue styles and scripts
//         public function enqueue(){
//             //enqueue styles
//             wp_enqueue_style('pluginStyle', plugins_url('/assets/style.css', __FILE__));

//             //enqueue scripts
//             wp_enqueue_script('pluginscript', plugins_url('assets/script.js', __FILE__));
//         }

//         //plugin activation
//         public function activate(){
//            // require_once( plugin_dir_path(__FILE__) . 'inc/Activate.php');
//             Activate::activate();
//         }

//         //plugin deactivation
//         public function deactivate(){
//            // require_once( plugin_dir_path(__FILE__) . 'inc/Activate.php');
//             Deactivate::deactivate();
//         }

//     }

//     //making an object of the Practice class

//     $practice = new Practice();

//     //when activate the plugin add the styles and scripts
//     $practice->register();
    

//     // //plugin activation
//     // require_once( plugin_dir_path( __FILE__ ) .'inc/practice_plugin_activate.php');
//     register_activation_hook( __FILE__, array($practice, 'activate'));

//     //plugin deactivation
//     //require_once( plugin_dir_path(__FILE__) . 'inc/Deactivate.php');
//     register_deactivation_hook( __FILE__, array($practice,'deactivate'));

// }