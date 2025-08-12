<?php
//require_once './../settings/init.php';
namespace classes;
use \PDO;


abstract class DB{ 
    public $db, $host = HOST, $dbname = DB, $user = DBUSERNAME, $password = DBPASSWORD; 

public function  __construct() {
	return $this->D_B();

}
public function D_B(){	

    try{
    $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->db->exec("set names utf8");
     return $this->db;   
     } catch(PDOException $e){  echo 'Нет соединения в DBVamlaC.'; }
     
     
       

}
public function close(){
   return $this->db = null;
}


}


/*

*/

?>




