<?php

namespace classes;
use \PDO;

class Page extends DB{

  public $db, $id, $ar;
//------------------------------------------------- 
  public function  __construct() {
    $this->db = parent:: __construct();   
  //  $this->id($id);
  }
//-------------------------------------------------  
  public function id($id){
             $param = "SELECT * FROM `pages` WHERE id = '$id'";    
 		try{
$sel = $this->db->query($param);
$this->ar = $sel->fetch(PDO::FETCH_ASSOC);

return $this->ar;
 
 
}catch(PDOException $e){ return " 404"; }   
      
      
      
      
      
      
      
      
      
      
//    $param = "SELECT * FROM `pages` WHERE id = '$this->id'";
//    $this->base2 = $this->db->query();
//    $this->base3 = $this->base2->fetch();
//    echo $this->base3;
  }    
//------------------------------------------------- 
}


