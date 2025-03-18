<?php 
include('footer.php');
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

<h3>Student login</h3>
<form action="student-login-process.php" method="post">
<div id="topnav">
        <a href="/hash/Index.php" class="btn">Home</a>
        <a href="/hash/Student-login.php" class="btn">Student Login</a>
			
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/Admin-login.php" class="btn">Admin Login</a>    
    </div>
	
</div>	
<p>
<input type="text" name="username" required placeholder="Enter username" /></p>
<p>
<input type="password" name="password" required placeholder="Enter password"/></p>
<input type="submit" name="submit" value="LOGIN" />

</form>
<p><a href='register-Student.php'>Register here</a></p>


	
</div>
</body>

</html>