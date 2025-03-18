<?php 
include('footer.php');

$mysqli = NEW MySQLi('localhost','root','','student_enroll');
$resultSet = $mysqli->query("Select classes FROM classes_offered");
?>

<!DOCTYPE HTML>
<html>
<body style="background-image: linear-gradient(to right,green,white,green);">

<head>

<meta charset="utf-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/hash/styles.css">
</head>

<body>



<div id="wrapper">
		<h1>Welcome to the University Portal</h1>
		
<div id="topnav">
        <a href="/hash/Index.php" class="btn">Home</a>
        <a href="/hash/Student-login.php" class="btn">Student Login</a>
			
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/Admin-login.php" class="btn">Admin Login</a>    
    </div>
	
</div>	
 
<p> Please log in to interact with the different classes offered below.</p>

<select name="classes_offered">
<?php
while($rows = $resultSet->fetch_assoc())
{
	$classes = $rows["classes"];
	echo "<option value='$classes'>$classes</option>";
}
?>
</select>
		


    


	
</div>
<img src="leon-wu-LLfRMRT-9AY-unsplash.jpg" alt="Academics" class="center" style="width:500px;height:500px;">
</body>
</html>
