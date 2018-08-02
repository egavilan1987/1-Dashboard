<?php 
	session_start();
	require_once "../../model/connection.php";
	require_once "../../model/Users.php";
	$obj= new users;

	$updatePassword=sha1($_POST['password']);
	$createdUser="Example User";

	$userPassword=array(
				$_POST['idUpdatePassword'],
			    $updatePassword
				);  
	echo $obj->updatePassword($userPassword);
 ?>





