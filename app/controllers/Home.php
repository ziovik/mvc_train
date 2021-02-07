<?php


class Home extends Controller
{
    public function __construct($_controller, $_action)
    {
        parent::__construct($_controller, $_action);
    }

//    public function indexAction(){  // public function indexAction($name){ to pass variables
////        echo $name;
////        die('Welcome to this project core');
//        $db = DB::getInstance();
//        $sql = "SELECT * FROM contact";  //for select
////        $contacts = $db->query($sql)->results();
////        $contacts = $db->query($sql)->first();
////        dnd($contacts);  // to get all
////        dnd($contacts->fname);  // get only fname
////        $fields = [
////            'fname'  => 'Mark',
////            'lname'  => 'King',
////            'email'  => 'maxim@yahoo.com'
////        ];
////        $contactQuery =$db->insert('contact', $fields);
////        $contactQuery =$db->update('contact', 3,  $fields);
//
////        $contactQuery = $db->delete('contact', 2);
//         $columns = $db->get_columns('contact');  // to ge the table columns used
//         dnd($columns);
//        $this->view->render('home/index');
//    }

    //test for the find, findfirst in database
    public function indexAction(){

        $db = DB::getInstance();
//        $contacts = $db->find('contact', [
//            'conditions' => "fname = ?",     // fname can be equal to the bind
//            'bind'       => ['Daniel'],
//            'order'      => "lname, fname",
//            'limit'      => 2
//        ]);
//        $contacts = $db->find('contact', [
//            'conditions' => ['fname = ?', 'lname = ?'],     // fname can be equal to the bind and lname = the next bind using array
//            'bind'       => ['Daniel', 'Mond'],
//            'order'      => "lname, fname",
//            'limit'      => 2  // number of record
//        ]);

        $contacts = $db->findfirst('contact', [   // for findfirst  which is only one it most give the first
            'conditions' => ['fname = ?', 'lname = ?'],     // fname can be equal to the bind and lname = the next bind using array
            'bind'       => ['Daniel', 'Mond'],

        ]);
        dnd($contacts);
        $this->view->render('home/index');
    }
}



