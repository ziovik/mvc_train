<?php


    define('DS', DIRECTORY_SEPARATOR);  //DS is a variable using a constant of directory separator.  /
    define('ROOT', dirname(__FILE__));  //XAMPP/mvc_train

    //loading the config and helper functions
    require_once (ROOT . DS . 'config' . DS . 'config.php' );
    require_once (ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' .DS . 'functions.php');

    //Autoload classes
    function autoload($className){
        if(file_exists(ROOT . DS . 'core' . DS . $className . '.php')){
            require_once (ROOT . DS . 'core' . DS . $className . '.php');
        }elseif (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php')){
            require_once (ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');
        }elseif (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php')){
            require_once (ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
        }
    }
    spl_autoload_register('autoload');
    session_start();

    //echo $_SERVER['PATH_INFO']; die();  //give everything after root mvc_train   which is /user/home etc
    $url = isset($_SERVER['PATH_INFO'])? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

//    $db = DB::getInstance();
//    dnd($db);
    //Route the request
    Router::route($url);
    //  var_dump($url);  // shows the array of the path
//    require_once (ROOT  .DS. 'core' . DS . 'bootstrap.php'); //xampp/mvc_train/core/bootstrap.php  ROOT DS core DS bootstrap.php

