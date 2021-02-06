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
        $sql = "SELECT * FROM contact";  //for select
//        $contacts = $db->query($sql)->results();
//        $contacts = $db->query($sql)->first();
//        dnd($contacts);  // to get all
//        dnd($contacts->fname);  // get only fname
//        $fields = [
//            'fname'  => 'Mark',
//            'lname'  => 'King',
//            'email'  => 'maxim@yahoo.com'
//        ];
//        $contactQuery =$db->insert('contact', $fields);
//        $contactQuery =$db->update('contact', 3,  $fields);

//        $contactQuery = $db->delete('contact', 2);
         $columns = $db->get_columns('contact');
         dnd($columns);
        $this->view->render('home/index');
    }
}