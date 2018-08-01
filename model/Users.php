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
					email,
					full_name,
					user_role,
					password,
					status,
					created_by_user,
					created_date,
					updated_by_user,
					updated_date
					FROM users
					WHERE id_user='$idUser'";
					
			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);
			
			$userData=array(
						'id_user' => $row[0],
						'user_name' => $row[1],
						'email' => $row[2],
						'full_name' => $row[3],
						'user_role' => $row[4],
						'password' => $row[5],
						'status' => $row[6],
						'created_by_user' => $row[7],
						'created_date' => $row[8],
						'updated_by_user' => $row[9],
						'updated_date' => $row[10]
						);
			return $userData;
		}
		public function updateUser($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE users SET user_name='$data[1]',
						email='$data[2]',
						full_name='$data[3]',
						user_role='$data[4]',
						status='$data[5]',
						updated_by_user = 'admin',
						updated_date=NOW()
						WHERE id_user='$data[0]'";



			return mysqli_query($connection,$sql);	
		}

		public function updatePassword($data){
			
			$c=new Connect();
			$connection=$c->connection();

			
			$sql="UPDATE users SET password='$data[1]',
								   updated_date=NOW()
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


