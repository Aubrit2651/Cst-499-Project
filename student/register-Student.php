<!DOCTYPE HTML>

<?php
include('connection.php');
include('footer.php');
?>

<html lang="en">
<body style="background-image: linear-gradient(to right,green,white,green);">
<head>

<meta charset="utf-8">
<title>Register Student</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/hash/styles.css">
</head>

<body>
<div id="wrapper">

<h3>Register Student</h3>
<form action="student-registerProcess.php" method="post">
<div id="topnav">
        <a href="/hash/Index.php" class="btn">Home</a>
        <a href="/hash/Student-login.php" class="btn">Student Login</a>
			
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/Admin-login.php" class="btn">Admin Login</a>    
    </div>
	
</div>	
<p><input type="text" name="username" required placeholder="Enter Your Username" /></p>
<p><input type="password" name="password" required placeholder="Enter Your Password"/></p>
<p><input type="text" name="firstname" required placeholder="Enter Your First Name"/></p>
<p><input type="text" name="lastname" required placeholder="Enter Your Last Name"/></p>
<p><input type="email" name="email" required placeholder="Enter Your Email Address"/></p>
<p><input type="text" name="SSN" required placeholder="Enter Your SSN"/></p>
<p><input type="text" name="address" required placeholder="Enter Your Address"/></p>
<p><input type="text" name="phone" required placeholder="Enter Your Phone Number"/></p>
<p><input type="submit" name="submit" value="Register" /></p>


</form>


  
</div>
</body>

</html>