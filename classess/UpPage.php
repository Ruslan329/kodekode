<?php

namespace classes;
use \PDO;

class UpPage extends DB{

  public $db, $ar;
  
  public function  __construct() {
    $this->db = parent:: __construct();   

  }
//-------------------------------------------------  
  public function update($id){
    $param = "SELECT * FROM `pages` WHERE id = '$id'";    
    try{
      $sel = $this->db->query($param);
      $this->ar = $sel->fetch(PDO::FETCH_ASSOC);
      return $this->ar;
    }
    catch(PDOException $e){
      return " 404";    
    }       
  }    
}


