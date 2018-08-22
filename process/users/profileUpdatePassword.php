<?php 
	session_start();
	require_once "../../model/connection.php";
	require_once "../../model/Users.php";
	$obj= new users;

	$updatePassword=sha1($_POST['password']);

	$updatePassword=sha1($_POST['password']);

	$data=array(
				$_SESSION['iduser'],
				$updatePassword,
				$_SESSION['user']			    
				);  
	echo $obj->updatePassword($data);
	//print_r($data);
 	//print_r($_POST);
 	//print_r($_SESSION);
 ?>