<?php 
	class Users{
		public function userRegister($data){
			
			$c=new Connect();
			$connection=$c->connection();


			$sql="INSERT INTO users (user_name,
							email,
							full_name,
							user_role,
							password,
							status,
							created_by_user,
							created_date)
						VALUES ('$data[0]',
							'$data[1]',
							'$data[2]',
							'$data[3]',
							'$data[4]',
							'Inactive',
							'$data[5]',
							 NOW())";

			return mysqli_query($connection,$sql);
		}
		public function loginUser($inform){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$password=sha1($inform[1]);
			$_SESSION['user']=$inform[0];
			$_SESSION['iduser']=self::bringID($inform);
			
			$sql="SELECT * 
					FROM users 
				WHERE user_name='$inform[0]'
				AND password='$password'";
			$result=mysqli_query($connection,$sql);
			
			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
		public function bringID($inform){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$password=sha1($inform[1]);
			
			$sql="SELECT id_user 
					FROM users 
					WHERE email='$inform[0]'
					AND password='$password'"; 
			$result=mysqli_query($connection,$sql);
			return mysqli_fetch_row($result)[0];
		}
		public function getUserData($idUser){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="SELECT id_user,
					user_name,
					password,
					user_role,
					created_by_user,
					updated_by_user,
					created_date,
					updated_date
					FROM users 
					WHERE id_user='$idUser'";
					
			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);
			
			$userArray=array(
						'id_user' => $row[0],
						'name' => $row[1],
						'lastName' => $row[2],
						'email' => $row[3]
						);
			return $userArray;
		}
		public function updateUser($data){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="UPDATE users SET user_name='$data[1]',
						user_role='$data[2]'
						WHERE id_user='$data[0]'";
			return mysqli_query($connection,$sql);	
		}
		public function deleteUser($idUser){
			
			$c=new Connect();
			$connection=$c->connection();
			
			$sql="DELETE FROM users 
					WHERE id_user='$idUser'";
			return mysqli_query($connection,$sql);
		}
	}
 ?>
