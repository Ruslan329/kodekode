<?php

namespace classes;
use \PDO;

class Category extends DB{

  public $db, $res2, $mass;
//------------------------------------------------- 
  public function  __construct() {
    $this->db = parent:: __construct();   
  }
//-------------------------------------------------  
//  public function url(){
//    //записываем запрос в базу данных в переменную $param2
//    $param2 = "SELECT url FROM `url`";       
//    //выполняем   
//    try{
//      //выполняем запрос ($param2) и переносим результат в $sel2
//      $sel2 = $this->db->query($param2);
//      //цикл, который записывает результат $sel2 в $res2(переменная)
//      while($res2 = $sel2->fetch(PDO::FETCH_ASSOC))
//      {//записываем данные $res2(переменная) в $res2(массив)
//        $this->res2[] = $res2;
//      }
//      //возвращаем $res2(массив)
//        return $this->res2;
//      
//        $this->mass = array_merge($this->res, $this->res2);
//        
//      }
//      //если не получается выполнить
//      catch(PDOException $e)
//      {//возвращаем ошибку
//        return " 404"; 
//      }                             
//  }
//-------------------------------------------------   
/*
  public function cat(){
    $param = "SELECT cat FROM `categories` UNION SELECT page FROM `pages`";  
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
*/
//-------------------------------------------------  
  public function cat(){
    $param = "SELECT cat FROM `categories`";  
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
//-------------------------------------------------  
  public function pageName(){
    $param3 = "SELECT id, author, page, text, descr, keywords, title FROM `pages`";  
    try{
      $sel3 = $this->db->query($param3);
      while($resu3 = $sel3->fetch(PDO::FETCH_ASSOC))
      {
        $this->resu3[] = $resu3;
      }
      return $this->resu3;
    }
    catch(PDOException $e){
      echo $e."404";
    }    
  }  
//------------------------------------------------- 




//public function pageCat(){
//  $param4 = "SELECT author FROM `pages`";  
//  try{
//    $sel4 = $this->db->query($param4);
//    while($resu4 = $sel4->fetch(PDO::FETCH_ASSOC))
//    {
//      $this->resu4[] = $resu4;
//    }
//    return $this->resu4;
//  }
//  catch(PDOException $e){
//    echo $e."404";
//  }    
//}  
//------------------------------------------------- 
}

