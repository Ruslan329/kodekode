<?php

namespace classes;
use \PDO;

class Account extends DB{

  public $db, $login, $resu, $descr, $name, $surname, $fathername, $ppass, $npass, $opass;

  public function  __construct() {
    $this->db = parent:: __construct();   
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function accountData($data){
    $this->login = $data['login'];
    $this->descr = $data['descr'];  
    $this->descr();
  }   
  //----------------------------------------------------------------------------------------------------------------- 
  public function user(){
    $param = "SELECT login, name, surname, fathername, descr, pass FROM `Users` WHERE login = '$_SESSION[user]' ";  
    try{
        $sel = $this->db->query($param);
        $this->resu = $sel->fetch(PDO::FETCH_ASSOC);
        return $this->resu;
    }
    catch(PDOException $e){ 
        return " 404";      
    }   
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function descr(){  
    $this->name = $data['name'];     
    $param = "INSERT INTO Users (login,descr) VALUES ('$_SESSION[user]','$this->descr')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute();   
    }
    catch(PDOException $e){echo "Error".$e;}  
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updName($data){       
    $this->name = $data['name'];     
    $param = "INSERT INTO Users (login,name) VALUES ('$_SESSION[user]','$this->name')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute();   
    }
    catch(PDOException $e){echo "Error".$e;}       
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updSurname($data){  
    $this->surname = $data['surname']; 
    $param = "INSERT INTO Users (login,surname) VALUES ('$_SESSION[user]','$this->surname')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute();   
    }
    catch(PDOException $e){echo "Error".$e;}    
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updFathername($data){  
    $this->fathername = $data['fathername']; 
    $param = "INSERT INTO Users (login,fathername) VALUES ('$_SESSION[user]','$this->fathername')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute();   
    }
    catch(PDOException $e){echo "Error".$e;}     
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updPass($data){  
    $this->ppass = $data['ppass'];    
    $this->npass = $data['npass'];       
    $param = "SELECT pass FROM `Users` WHERE login = '$_SESSION[user]' ";  
    try{
        $sel = $this->db->query($param);
        $this->opass = $sel->fetch(PDO::FETCH_ASSOC); 
    }
    catch(PDOException $e){return " 404";}        
    
    if($this->ppass == $this->opass['pass']){
        $lenPass = strlen($this->npass);  
        if($lenPass <= 20 && $lenPass >=6){       
            $param = "INSERT INTO Users (login,pass) VALUES ('$_SESSION[user]','$this->npass')";
            try{       
            $ex = $this->db->prepare($param);      
            $ex->execute();   
            }
            catch(PDOException $e){echo "Error".$e;}           
        }
        else{
            return "Пароль не корректный!";
        }           
    }  
    else{
        return "Ошибка! Попробуйте еще раз!";
    }
  }
  //----------------------------------------------------------------------------------------------------------------- 
   
}
    

  
  









