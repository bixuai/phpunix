<?php
class init_apps {
    static function init() {
        $apps = scandir(G_ROOT.'apps');
        foreach ( $apps as $_app) {
            if(strpos($_app, '.') === 0) continue;
            include G_ROOT.'apps/'.$_app.'/init.php';
        }
    }
}

