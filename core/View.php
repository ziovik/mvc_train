<?php


class View
{
  protected $_head, $_body, $_siteTitle = SITE_TITLE, $_outputBuffer, $_layout = DEFAULT_LAYOUT;

  public function __construct()
  {
  }
  public function render($viewName){
      $viewArray = explode('/', $viewName);// separating by /
      $viewString = implode(DS, $viewArray);  // and back with out DS

      if(file_exists(ROOT .DS . 'app' . DS . 'views' . DS . $viewString . '.php')){
          include(ROOT .DS . 'app' . DS . 'views' . DS . $viewString . '.php');
          include(ROOT .DS . 'app' . DS . 'views' . DS . 'layouts' .  DS . $this->_layout . '.php');
      }else{
          die('This view \"' .$viewName .'\" does not exist. ');
      }
  }
  public function content($type){
      if($type == 'head'){
         return $this->_head;
      }elseif ($type == 'body'){
          return $this->_body;
      }
      return false;
  }

  public function start($type){
    $this->_outputBuffer = $type;
    ob_start(); //start output buffer and wrap it and print on screen
  }

  public function end(){
    if($this->_outputBuffer == 'head'){
        $this->_head = ob_get_clean(); // clean that wrapped buffer
    }elseif ($this->_outputBuffer == 'body'){
        $this->_body = ob_get_clean(); // clean that wrapped buffer
    }else{
        die('You must first run the start method');
    }
  }
  public function siteTitle(){
      return $this->_siteTitle;
  }
  public function setSiteTitle($title){
       $this->_siteTitle = $title;
  }

  public function setLayout($path){
     $this->_layout = $path;
  }

}