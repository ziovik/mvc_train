<?php
/**
 * Created by PhpStorm.
 * User: monda
 * Date: 04.02.2021
 * Time: 7:21
 */
//$url was pass from first page
class Router {
    public static function route($url){

        //extract the controller from the url
        //controller
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER ; //DEFAULT_CONTROLLER IS DEFINE IN config  ucwords means all in capital
        //dnd($controller);
        $controller_name = $controller;
        array_shift($url);   //this shift the url from index 0 to 1. so we are working on the action part now.which will start from url[0]

        //action. getting the action part
        $action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action' : IndexAction ; //IndexAction will be define later. but we are concat the url with Action
        //dnd($action);
        $action_name = $action;
        array_shift($url);


        //get the parameter which is next in the url after shift
        $queryParam = $url;  // the remaining after getting the controller and action
        $dispatch = new $controller($controller_name, $action);  // creating an object
        if(method_exists($controller,$action)){
            call_user_func_array([$dispatch, $action], $queryParam);  // $dispatch->$action($queryParam) thesame
        }else{
            die('This method does not exist in controller \"' .$controller_name .'\"');
        }

//        echo $controller .'<br>'; //shows our controller name with capital letter
//        echo $action .'<br>'; //shows our action name
//        dnd($url);               // shows the rest after the controller in array
    }


}