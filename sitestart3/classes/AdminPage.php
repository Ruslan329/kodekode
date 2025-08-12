<?php

namespace classes;
use \PDO;

class AdminPage extends DB{

  public $db, $addcat, $delcat, $idcat, $loginAdmin, $passwordAdmin, $resu;

  public function  __construct() {
    $this->db = parent:: __construct();   
  }

  public function delPage($data){
    $this->delpage = $data['delpage'];
    $this->delpageid = $data['delpageid'];
    $this->delpagecat = $data['delpagecat'];
    $param = "DELETE FROM `pages` WHERE id=$this->delpageid";    
    try{
        $sel = $this->db->query($param);
    }catch(PDOException $e){ return " 404"; }       
  }

  public function page(){
    $param = "SELECT id, author, page, text, descr, keywords, title FROM `pages`";  
    try{
      $sel = $this->db->query($param);
      while($resu = $sel->fetch(PDO::FETCH_ASSOC))
      {
        $this->resu[] = $resu;
      }    
      return $this->resu;       
    }
    catch(PDOException $e){
      echo $e."404";
    }    
  }
  public function upPage($data){
    $this->id = $data['pageid'];  
    $this->uppage = $data['uppage']; 
    $this->uppagecat = $data['uppagecat']; 
    $this->uptext = $data['uptext']; 
    $this->upkey = $data['upkey']; 
    $this->updesc = $data['updesc']; 
    $this->uptitle = $data['uptitle']; 
    $param5 = "UPDATE `pages` SET page = '$this->uppage', author='$this->uppagecat', text='$this->uptext', keywords='$this->upkey', descr='$this->updesc', title='$this->uptitle' WHERE id='$this->id'";  
    try{
      $sel5 = $this->db->query($param5);
    }catch(PDOException $e){
      echo $e."404";
    }    
  }
}