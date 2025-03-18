<?php 

include('connection.php');
include('errors.php');

if(isset($_POST['submit'])){

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
		
$sql = "SELECT username, password FROM admin_tbl WHERE username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); // output data of each row

if ($result->num_rows == 1 && $username==$row['username'] && password_verify($password, $row['password']) ) {
  

header('location:admin-home.php');
}

 else {
    header('location:Admin-login.php');
}

} // end of isset
$conn->close();
 
?>
<p>"You successfully logged in!.</p>
	 
	  '<script>
			alert("You have been successfully logged in!")
				
		</script>';













 
















