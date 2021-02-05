<?php


class Home extends Controller
{
    public function __construct($_controller, $_action)
    {
        parent::__construct($_controller, $_action);
    }

    public function indexAction(){  // public function indexAction($name){ to pass variables
//        echo $name;
//        die('Welcome to this project core');
        $this->view->render('home/index');
    }
}