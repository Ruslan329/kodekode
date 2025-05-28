<?php

namespace classes;


class Registration extends DB{

    
    
  public $repeatPassword,$login,$name,$surname,$fathername,$phone,$photo,$typeactivit,$title,$pass,$datetime;
//------------------------------------------------- 
  public function  __construct() {
      
 
      $this->db = parent:: __construct();   
  }
//-------------------------------------------------  
  public function registr($data){
    $this->datetime = date('d.m.Y H:i:s');;  
    $this->typeactivit = $data['typeactivit'];
    $this->phone = $data['phone'];
    $this->name = $data['name'];
    $this->surname = $data['surname'];
    $this->fathername = $data['fathername'];
    $this->pass = $data['pass'];
    $this->login = $data['login'];
    $this->title = $data['title'];   
    $this->repeatPassword = $data['repeatPass'];
    return $this->validate();    
  }    
//------------------------------------------------- 
  private function validate(){
    //Проверка кол-ва введенных символов
    if($this->pass == $this->repeatPassword){
      $lenLogin = strlen($this->login);
      $lenPass = strlen($this->pass);
      //Проверка на совпадение паролей
      if($lenLogin <= 20 || $lenLogin >=6){
        if($lenPass <= 20 || $lenPass >=6){
          //Проверка на существование аккаунта  
          //$param3 = "SELECT * FROM `hovers` WHERE hover > '$time'";           
          //$param =  "SELECT name FROM `users` WHERE  name = '$this->login'";       
          $count = $this->db->query("SELECT COUNT(id) FROM `Users` WHERE login= '$this->login'")->fetchColumn();
          if($count == false){
            $this->dbReg();         
          }else{  
              return "Логин занят";       
          }  
        }else{
            return "Пароль не корректный!";
        }      
      }else{
          return "Лоeгин не корректный!";
      }
    }else{
        return "Пароли не совпадают! Попробуйте еще раз.";
    }      
    //сделать проверку на разнообразие символов используя pregmatch     
  } 
  
//------------------------------------------------- 
  public function dbReg(){

    //запрос на создание аккаунта
 //   $param = "INSERT INTO Users (login,timepayment,settings,marker,name,surname,fathername,phone,photo,pasportphoto,inn,ogrn,oge,typeactivit,status,pass,datetime') VALUES ('$this->login','','','$this->marker','$this->name','$this->surname','$this->fathername','$this->phone','','','','','','$this->typeactivit','','$this->pass','$this->datetime')";
 $param = "INSERT INTO Users (login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime) VALUES ('$this->login','$this->name','$this->surname','$this->fathername','$this->phone','$this->photo','$this->typeactivit','$this->title','$this->pass','$this->datetime')";
 
//  $param = "INSERT INTO Users (login) VALUES ('$this->login')";
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
    catch(PDOException $e){  echo "Error".$e;}  
  }
//------------------------------------------------- 
  public function loged(){
    if(isset( $_SESSION['user'])){
        echo '<meta  http-equiv="refresh" content="0;http://sitestart/loged" >';
      //header('Location: http://sitestart/loged');
    }
    else{
         echo '<meta  http-equiv="refresh" content="0;http://sitestart/registration" >';
    //  header('Location: http://sitestart/registration');
    }
  }
//------------------------------------------------- 
}
