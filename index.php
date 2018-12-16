<?php 
 include_once("User.php");
// on click button 
 if (isset($_POST["submit"])) {
 	
 	$name=$_POST["user"];
 	$pass=$_POST["password"];

 	$object= new user();// 5dna object mn class user 34an nst5dmo fel login.
 	$object->login($name, $pass);
 }




 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form method="post" action="index.php">
  	username: <input type="text" name="user"/>
    
    password: <input type="password" name="password"/>

    <button type="submit" name="submit" value="login">Login</button> 

  </form>
</body>
</html>