<?php 
	session_start();
	require_once "../../model/connection.php";
	require_once "../../model/Users.php";
	$obj= new users;
		
		print_r($_POST);

	$userPassword=array(
				$_POST['idUpdatePassword'],
			    $_POST['password']
				);  
	echo $obj->updatePassword($userPassword);
 ?>
