<?php

/*
* @package Practice
*/

namespace Inc\Base;

class SettingsLinks{

    public function register(){
        
        add_filter("plugin_action_links_".PLUGIN, array($this,'settings_link'));
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