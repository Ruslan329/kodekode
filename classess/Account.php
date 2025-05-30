<?php

namespace classes;
use \PDO;

class Account extends DB{

  public $db, $pass, $login;
//------------------------------------------------- 
  public function  __construct() {
    $this->db = parent:: __construct();   
  }
//-------------------------------------------------  
  public function account($data){
    $this->pass = $data['password'];
    $this->login = $data['login'];
    
  }   
  public function avatar($data){
    $this->avatar = $data['avatar'];
    $param = "INSERT INTO users (avatar) VALUES ('avatars/$this->avatar')";
    try{
      $ex = $this->db->prepare($param);
      $ex->execute();
      $count = $ex->rowCount();	
      if(0 === $count){}
      elseif(1 ===$count){  
        $_SESSION['user'] = $this->login;
        $this->loged();
      }
    }
    catch(PDOException $e){  echo $e;}  
  }
  }
    

  
  




