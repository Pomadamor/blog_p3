<?php

// Affiche tout les erreurs directement dans le navigateur
ini_set('display_errors','on');
error_reporting(E_ALL);

class MyAutoload
{
    public static function start()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));

        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        $root =  $_SERVER['DOCUMENT_ROOT'].'/';

        // constant
        //Definition du domaine (blog.lernasso.org/) et du chemin des dossiers (/var/web...)
        define("HOST", $host.'' );
        define("ROOT", $root.'dp/p3/MVC/' );

        define("CONTROLLER", ROOT."controller/");
        define("VIEW", ROOT."view/");
        define("MODEL", ROOT."model/");
        //define("ASSETS", HOST."assets/");
    }

    public static function autoload($class)
    {
        if(file_exists(MODEL.$class.'.php')) {
            include_once(MODEL.$class.'.php');
        } else if(file_exists(CONTROLLER.$class.'.php')) {
            include_once(CONTROLLER.$class.'.php');
        } else if(file_exists(VIEW.$class.'.php')) {
            include_once(VIEW.$class.'.php');
        } else {
          echo "erreur autoload";
        }
    }

}
