<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author 1
 */
class Controller {
       public $data, $result;

        public function __construct() { 
    
      $this->post(); 
      
      $this->name();
      $this->result();
    
    } 
       private function post(){
      if($_POST){ $a = filter_input_array(INPUT_POST);    
    if($a){
		foreach($a as $key=>$value)
	{
       $this->data[$key]= strip_tags($value);  
       $this->data[$key]=htmlspecialchars($value);
       $this->data[$key] = trim($value);  		
	}
    }
      }
}
private function name(){
     if(isset($this->data['action'])){
$Name = explode("/", $this->data['action']);   


$this->action($Name['0'],$Name['1'],$Name['2']);
 }
}
   
private function action($nameSpase, $nameClass, $function){
    
    
    
  $class = $nameSpase."\\".$nameClass;
 
  
        $obj  = new $class;
        $this->result =  $obj->$function($this->data);
        return $this->result;
}
public function result(){
    return $this->result;
}
}
