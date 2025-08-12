<?php

namespace classes;


class Login extends DB{

  public $db, $pass, $login;
//------------------------------------------------- 
  public function  __construct() {
    $this->db = parent:: __construct();   
  }
//-------------------------------------------------  
  public function log($data){
    $this->pass = $data['password'];
    $this->login = $data['login'];
    
//    $param = "SELECT * FROM `users`WHERE name = '$this->login' AND pass = '$this->pass' ";          
// 		try{
//$sel = $data[db]->query($param);
//$this->ar = $sel->fetch(PDO::FETCH_ASSOC);
//
// $_SESSION['user'] = $this->login;
// header('Location: http://sitestart/loged');
// 
// 
//}catch(PDOException $e){ return "Такого аккаунта не существует! Зарегистрируйтесь!"; }   
    
    
    
    $count = $this->db->query("SELECT COUNT(id) FROM `users` WHERE login = '$this->login' AND pass = '$this->pass' ")->fetchColumn();
    if($count == true){
      $_SESSION['user'] = $this->login;
      $_SESSION['pass'] = $this->pass;
      if(isset( $_SESSION['user'])){
        header('Location: http://sitestart/loged');
      }     
    }else{  
      return "Такого аккаунта не существует! Зарегистрируйтесь!";       
    }  
  }

}




