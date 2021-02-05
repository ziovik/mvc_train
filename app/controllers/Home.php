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
        $db = DB::getInstance();
//        $sql = "SELECT * FROM contact";  //for select
        $fields = [
            'fname'  => 'Maxim',
            'lname'  => 'Denis',
            'email'  => 'maxim@yahoo.com'
        ];
        $contactQuery =$db->insert('contact', $fields);

        $this->view->render('home/index');
    }
}