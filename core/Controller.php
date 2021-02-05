<?php


class Controller extends Application
{
   protected  $_controller, $_action;
   public $view;

   public function __construct($_controller, $_action)
   {
       parent::__construct();  // it goes into application.php cos its extended and run the __construct
       $this->_controller = $_controller;
       $this->_action = $_action;
       $this->view = new View();  // view controller
   }
}