<?php 
include('connection.php');

if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$hashPassword = password_hash($password,PASSWORD_DEFAULT);
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$SSN = $_POST['SSN'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		
					
		$sql = "insert into registered_user (username, password, firstname, lastname, email, SSN, address, phone) values('$username', '$hashPassword', '$firstname', '$lastname', '$email', '$SSN', '$address', '$phone')";
		$result = $conn->query($sql);
		
		if($result){
			echo "<script type='text/javascript'>
                    alert('You have been successfully registered, You have been redirected to the student login page.');
                    window.location.href = 'Student-login.php';
                  </script>";
		}

		else{

			echo "Try again. Something went wrong<p><a href='register-Student.php'>Register</a>" ;
		}

	$conn->close();
	}


?>