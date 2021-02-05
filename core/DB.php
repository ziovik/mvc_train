<?php


class DB
{
   private static $_instance = null;
   private $_pdo, $_query, $_error = false, $_result, $_count = 0, $_lastInsertID = null;

   private function __construct()
   {
       try {
           $this->_pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
       } catch (PDOException $e) {
           die($e->getMessage());
       }
   }

   public static function getInstance(){
       if(!isset(self::$_instance)){
           self::$_instance = new DB();
       }
       return self::$_instance ;
   }
   public function query($sql, $params = []){   // the query preparing and executing statement
       $this->_error = false;   //make sure its false
       if($this->_query = $this->_pdo->prepare($sql)){   // prepare the query
           $x = 1;     //adding a counter
           if(count($params)){
               foreach ($params as $param){    // going through each params and binding them and then increase the counter by 1 until it get all param
                   $this->_query->bindValue($x, $param);  // bind
                   $x++;   //incre
               }
           }
           if($this->_query->execute()){   // executing the query
               $this->_result = $this->_query->fetchAll(PDO::FETCH_OBJ);  // get query as an object
               $this->_count = $this->_query->rowCount();  // count rows
               $this->_lastInsertID = $this->_pdo->lastInsertId();  // get last inserted id
           }else{
              $this->_error = true;
           }
           return $this;  // get details
       }
   }

   public function insert($table, $fields = []){
       $fieldString = '';
       $valueString = '';
       $values = [];

       foreach ($fields as $field => $value){
           $fieldString .= '`' . $field . '`,'; // its from insert into (fields) => `id`, `fname`, etc  so its `$field`,
           $valueString .= '?,'; // its from insert into (field) values (?, ?,)... etc
           $values[] = $value;
       }
       $fieldString = rtrim($fieldString,',');  // trim the last , from right
       $valueString = rtrim($valueString,',');  // trim the last , from right
       $sql = "INSERT INTO {$table} ({$fieldString}) VALUES ({$valueString})";

       if(!$this->query($sql, $values)->error()){
           return true;
       }
       return  false;

//       dnd($sql);

   }
   public function error(){
       return $this->_error;
   }
}