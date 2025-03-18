<!DOCTYPE HTML>

<?php
include('connection.php');
include('footer.php');
?>

<html lang="en">
<body style="background-image: linear-gradient(to right,green,white,green);">
<head>

<meta charset="utf-8">
<title>Registration for Fall Machine Learning</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/hash/styles.css">
</head>

<body>
<div id="wrapper">

<h3>Registration for Fall Machine Learning</h3>
<form action="student-registerProcess.php" method="post">
<div id="topnav">
        <a href="/hash/Index.php" class="btn">Home</a>
        <a href="/hash/Student-login.php" class="btn">Student Login</a>
			
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/Admin-login.php" class="btn">Admin Login</a>    
    </div>
	
</div>	
<p><input type="int" name="id" required placeholder="Enter Your Student ID" /></p>
<p><input type="text" name="firstname" required placeholder="Enter Your First Name"/></p>
<p><input type="text" name="lastname" required placeholder="Enter Your Last Name"/></p>
<p><input type="email" name="email" required placeholder="Enter Your Email Address"/></p>
<p><input type="submit" name="submit" value="Register" /></p>
</form> 
</div>
</body>
</html>