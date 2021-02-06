<?php
/**
 * Created by PhpStorm.
 * User: monda
 * Date: 04.02.2021
 * Time: 7:03
 */
  define('DEBUG', true);

  define ('DB_NAME', 'mvc_train');  //database name
  define ('DB_USER', 'root');  //database user
  define ('DB_PASSWORD', '');  //database password
  define ('DB_HOST', '127.0.0.1');  //database host

  define('DEFAULT_CONTROLLER', 'Home'); //default controller will be Home if no one is there in url

  define('DEFAULT_LAYOUT', 'default'); //if no layout is set in controller then use this layout

  define('PROOT', 'mvc_train');

  define('SITE_TITLE', 'Training for MVC Framework');  //this title is used only when the title is not set in controller