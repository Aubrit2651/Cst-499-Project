<?php 
include('connection.php');
include('errors.php');
if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$hashPassword = password_hash($password,PASSWORD_DEFAULT);
					
		$sql = "insert into admin_tbl (username, password) values('$username', '$hashPassword')";
		$result = $conn->query($sql);
		
		if($result){
		
			header('location:Admin-login.php');
		}

		else{

			echo "Try again. Something went wrong<p><a href='register-Admin.php'>Register</a>" ;
		}

	$conn->close();
	} // end of isset


?>	