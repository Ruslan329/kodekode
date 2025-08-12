<?php

namespace classes;
use \PDO;

class Account extends DB{

  public $db, $login, $resu, $descr, $name, $surname, $fathername, $pass, $phone, $typeactivit, $title, $email, $ppass, $npass, $opass, $repeatppass;

  public function  __construct() {
    $this->db = parent:: __construct();   
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function accountData($data){
  $this->datetime = $data['date'];  
    $this->typeactivit = $data['typeactivit'];
    $this->phone = $data['phone'];
    $this->name = $data['name'];
    $this->surname = $data['surname'];
    $this->fathername = $data['fathername'];
    $this->pass = $data['pass'];
    $this->login = $data['login'];
    $this->title = $data['title'];   
    $this->email = $data['email'];   
    $this->descr = $data['descr']; 
    
    $this->descr();
    
  }   
  //----------------------------------------------------------------------------------------------------------------- 
  public function user(){
    
    $param = "SELECT login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime,email,descr FROM `Users` WHERE login = '$_SESSION[user]' ";  
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

    $param = "INSERT INTO Users (login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime,email,descr) VALUES ('$_SESSION[user]','$this->name','$this->surname','$this->fathername','$this->phone','$this->photo','$this->typeactivit','$this->title','$this->pass','$this->datetime','$this->email','$this->descr')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute(); 
        return "Администратор скоро подтвердит изменения, подождите...";
    }
    catch(PDOException $e){echo "Error".$e;}  
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updName($data){       
$this->datetime = $data['date'];  
    $this->typeactivit = $data['typeactivit'];
    $this->phone = $data['phone'];
    $this->name = $data['name'];
    $this->surname = $data['surname'];
    $this->fathername = $data['fathername'];
    $this->pass = $data['pass'];
    $this->login = $data['login'];
    $this->title = $data['title'];   
    $this->email = $data['email'];   
    $this->descr = $data['descr'];      
    $param = "INSERT INTO Users (login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime,email,descr) VALUES ('$_SESSION[user]','$this->name','$this->surname','$this->fathername','$this->phone','$this->photo','$this->typeactivit','$this->title','$this->pass','$this->datetime','$this->email','$this->descr')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute();   
        return "Администратор скоро подтвердит изменения, подождите...";
    }
    catch(PDOException $e){echo "Error".$e;}       
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updSurname($data){  
$this->datetime = $data['date'];  
    $this->typeactivit = $data['typeactivit'];
    $this->phone = $data['phone'];
    $this->name = $data['name'];
    $this->surname = $data['surname'];
    $this->fathername = $data['fathername'];
    $this->pass = $data['pass'];
    $this->login = $data['login'];
    $this->title = $data['title'];   
    $this->email = $data['email'];   
    $this->descr = $data['descr']; 
     $param = "INSERT INTO Users (login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime,email,descr) VALUES ('$_SESSION[user]','$this->name','$this->surname','$this->fathername','$this->phone','$this->photo','$this->typeactivit','$this->title','$this->pass','$this->datetime','$this->email','$this->descr')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute(); 
        return "Администратор скоро подтвердит изменения, подождите...";
    }
    catch(PDOException $e){echo "Error".$e;}    
  }
  //----------------------------------------------------------------------------------------------------------------- 
  public function updFathername($data){  
$this->datetime = $data['date'];  
    $this->typeactivit = $data['typeactivit'];
    $this->phone = $data['phone'];
    $this->name = $data['name'];
    $this->surname = $data['surname'];
    $this->fathername = $data['fathername'];
    $this->pass = $data['pass'];
    $this->login = $data['login'];
    $this->title = $data['title'];   
    $this->email = $data['email'];   
    $this->descr = $data['descr'];  
    $param = "INSERT INTO Users (login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime,email,descr) VALUES ('$_SESSION[user]','$this->name','$this->surname','$this->fathername','$this->phone','$this->photo','$this->typeactivit','$this->title','$this->pass','$this->datetime','$this->email','$this->descr')";
    try{       
        $ex = $this->db->prepare($param);      
        $ex->execute();  
        return "Администратор скоро подтвердит изменения, подождите...";
    }
    catch(PDOException $e){echo "Error".$e;}     
  }
  //-----------------------------------------------------------------------------------------------------------------
  public function updPass($data){  
    $this->ppass = $data['ppass'];
    $this->npass = $data['npass'];
    $this->repeatnpass = $data['repeatnpass'];
    $this->email = $data['email'];
    
    
    
//    $param = "SELECT pass FROM `Users` WHERE login = '$_SESSION[user]' ";  
//    try{
//
//        $sel = $this->db->query($param);
//     
//        $this->opass = $sel->fetch(PDO::FETCH_ASSOC); 
//       // return 'okkkkkk';
//    }
//    catch(PDOException $e){return " 404";}   
          
   $this->opass = $_SESSION['pass'];
    
    
    if($this->npass == $this->repeatnpass){     
    if($this->ppass == $this->opass){
      
      $lenPass = strlen($this->npass);  
        if($lenPass <= 20 && $lenPass >=6){  
          
          $_SESSION['updatepass'] =  rand(1000000, 100000000);

          
          mail($this->email, "Подтверждение смены пароля", "Здравствуйте, ".$_SESSION['user'].", подтвердите смену пароля с ".$this->ppass." на ".$this->npass."<form method='post' action='http://sitestart3/login' ><input type='hidden' value='".$_SESSION['updatepass']."' ><button>123</button><form>", "From: sender@example.com\r\n");
          return "Письмо-подтверждение было прислано вам на вашу эл. почту почту!";         
        }
        else{
            return "Пароль не корректный!";
        }           
    }  
    else{
        return "Ошибка! Попробуйте еще раз!";
    }
  }
  }
   //-----------------------------------------------------------------------------------------------------------------
//  public function pass($data){
//    $this->datetime = $data['date'];  
//    $this->typeactivit = $data['typeactivit'];
//    $this->phone = $data['phone'];
//    $this->name = $data['name'];
//    $this->surname = $data['surname'];
//    $this->fathername = $data['fathername'];
//    $this->pass = $data['pass'];
//    $this->title = $data['title'];   
//    $this->email = $data['email'];   
//    $this->descr = $data['descr'];    
//    $this->ppass = $data['ppass'];
//    $this->npass = $data['npass'];
//    $param = "SELECT pass FROM `Users` WHERE login = '$_SESSION[user]' ";  
//    try{
//        $sel = $this->db->query($param);
//        $this->opass = $sel->fetch(PDO::FETCH_ASSOC); 
//    }
//    catch(PDOException $e){return " 404";}        
//               echo $this->opass['pass']."<br>";
//               echo $this->ppass."<br>";
//               echo $this->npass."<br>";
//    if($this->ppass == $this->opass['pass']){
//        $lenPass = strlen($this->npass);  
//
//        if($lenPass <= 20 && $lenPass >=6){       
//            $param = "INSERT INTO Users (login,name,surname,fathername,phone,photo,typeactivit,title,pass,datetime,email,descr) VALUES ('$_SESSION[user]','$this->name','$this->surname','$this->fathername','$this->phone','$this->photo','$this->typeactivit','$this->title','$this->npass','$this->datetime','$this->email','$this->descr')";
//            try{       
//            $ex = $this->db->prepare($param);      
//            $ex->execute();   
//         
//            }
//            catch(PDOException $e){echo "Error".$e;}           
//        }
//        else{
//            return "Пароль не корректный!";
//        }           
//    }  
//    else{
//        return "Ошибка! Попробуйте еще раз!";
//    }
//  }
  //-----------------------------------------------------------------------------------------------------------------
  public function verifyMailUpdatePass($data){
  
     if($_SESSION['updatepass'] === $data['updatePass']){
//        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
//         if(isset($_SESSION['pass']) && !empty($_SESSION['pass'])){
                 echo "кккккккккккккккккккккккккккккккккккккккккккккк11111";
//             }
//        }
    }
  }
   
}
        