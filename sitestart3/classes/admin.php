<?php

namespace classes;
use \PDO;

class Admin extends DB{

  public $db, $addcat, $delcat, $idcat, $loginAdmin, $passwordAdmin, $resu4;

  public function  __construct() {
    $this->db = parent:: __construct();   
  }
//-------------------------------------------------  
  public function addCat($data){
    $this->addcat = $data['addcat'];
    $param = "INSERT INTO `categories`(cat) VALUES ('$this->addcat')";    
    try{
        $sel = $this->db->query($param);
    }catch(PDOException $e){ return " 404"; }       
  } 

  public function delCat($data){
    $this->delcat = $data['delcat'];
    $param = "DELETE FROM `categories` WHERE id=$this->delcat";    
    try{
        $sel = $this->db->query($param);
    }catch(PDOException $e){ return " 404"; }       
  }
  
  public function catId(){
  $param4 = "SELECT cat,id FROM `categories`";  
  try{
    $sel4 = $this->db->query($param4);
    while($resu4 = $sel4->fetch(PDO::FETCH_ASSOC))
    {
      $this->resu4[] = $resu4;
    }
    return $this->resu4;
  }
  catch(PDOException $e){
    echo $e."404";
  }    
}
  public function upCat($data){
    $this->addcat = $data['addcat']; 
      $this->idcat = $data['idcat']; 
      
      echo $this->idcat."-".$this->addcat;
    $param5 = "UPDATE `categories` SET cat = '$this->addcat' WHERE id='$this->idcat'";  
    try{
      $sel5 = $this->db->query($param5);
    }catch(PDOException $e){
      echo $e."404";
    }    
  }
   
  public function log($data){
    $this->logAdmin = $data['loginAdmin'];
    $this->passAdmin = $data['passwordAdmin'];
    // $param = "SELECT login, pass FROM `admin`";  
    // try{
    //   $sel = $this->db->query($param);
    //   if($this->logAdmin == $this->sel['login'] && $this->passAdmin == $this->sel['pass'])       
    //   {
    //     $_SESSION['admin'] = $this->logAdmin; 
    //     if(isset( $_SESSION['admin'])){
    //       header('Location: http://sitestart/adminPanel');
    //     }  
    //   } 
    //   else{echo'err';}
    // }
    // catch(PDOException $e){
    //   echo $e."404";
    // }    


      $count = $this->db->query("SELECT COUNT(id) FROM `admin` WHERE login = '$this->logAdmin' AND pass = '$this->passAdmin' ")->fetchColumn();
    if($count == true){
      $_SESSION['admin'] = $this->logAdmin;
      if(isset( $_SESSION['admin'])){
        header('Location: http://sitestart/adminPanel');
      }     
    }else{  
      return "err";       
    }  


  }
//  public function cat(){
//    $param = "SELECT cat FROM `categories`";  
//    try{
//      $sel = $this->db->query($param);
//      while($resu = $sel->fetch(PDO::FETCH_ASSOC))
//      {
//        $this->resu[] = $resu;
//      }
//      return $this->resu;
//    }
//    catch(PDOException $e){
//      echo $e."404";
//    }    
//  }





}