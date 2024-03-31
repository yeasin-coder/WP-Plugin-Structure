<?php

/*
* @package Practice
*/

namespace Inc\Base;

use Inc\Base\BaseController;

class SettingsLinks extends BaseController{

    public function register(){
        echo $this->plugin;
        add_filter("plugin_action_links_$this->plugin", array($this,'settings_link'));
    }

    //links in under the plugin name
    public function settings_link($links){
        $settings_link = "<a href='options_general.php?page=practice_plugin'>Settings</a>";

        $view_link = "<a href='view.php?page=practice_plugin'>View</a>";

        array_push($links, $settings_link);

        array_push($links, $view_link);

        return $links;
    }
}