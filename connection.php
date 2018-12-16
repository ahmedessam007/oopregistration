<?php 
  // connection of db

 class connection {

  public function dbconnect(){

  	return new PDO("mysql:host=localhost;dbname=registration","root","");
  }


 }


 ?>