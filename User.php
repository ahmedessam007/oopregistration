<?php 
// verify connection of database
include_once("connection.php");
class user{

private $db;

public function __construct(){

	$this->db= new connection(); // connection object.

	$this->db = $this->db->dbconnect();// de method bt3ml return ll PDO object  flma trg3 l PDO hy7slha assign ll object "db" elly 5dnah mn el connecttion.
}

public function login($name,$pass){

  // check if the username and password exist.
 if (! empty($name)&& !empty($pass)) {
 	
    $st= $this->db->prepare("select * from user where name=? and password=?");
    $st->bindparam(1,$name);
    $st->bindparam(2, $pass);
    $st->execute();
    if ($st->rowCount() == 1) {
    	echo "welcome";
    }
    else{
    	echo "incorrect username and password";
    }
 }else{
 	echo "please enter username and pass";
 } 


}



}




 ?>