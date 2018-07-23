<?php 
	session_start();
	require_once "../../model/connection.php";
	require_once "../../model/Users.php";
	$obj= new users;
	$userArray=array(
			    $_POST['idUser'],  
			    $_POST['nameUpdate'] , 
			    $_POST['lastNameUpdate'],  
			    $_POST['userUpdate']
				);  
	echo $obj->updateUser($userArray);
 ?>
