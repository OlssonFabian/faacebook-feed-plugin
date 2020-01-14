<?php

class FB_Dependencies {

    public static function load_dependencies(){
        require_once plugin_dir_path( __DIR__ ) . "facebook/graph-sdk/src/Facebook/autoload.php";
        require_once "class-FB_Keys.php";
        require_once "class-FB_Url_Settup.php";
        require_once "class-FB_Loop.php";
        require_once "class-FB_Connect.php";
        require_once "class-FB_Setting.php";
        require_once "class-FB_Activator.php";
        require_once "class-FB_Deactivator.php";
        include __DIR__ . "/../settings/settings.php";
    }
}