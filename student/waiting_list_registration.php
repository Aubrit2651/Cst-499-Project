

<!DOCTYPE HTML>

<?php
include('connection.php');
include('footer.php');
?>

<html lang="en">
<body style="background-image: linear-gradient(to right,green,white,green);">
<head>

<meta charset="utf-8">
<title>Student Waitlist Registration</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/hash/styles.css">
</head>

<body>
<div id="wrapper">



<h3>Student Waitlist Registration</h3>
<form action="wait-list-registration-process.php" method="post">
<div id="topnav">
        <a href="/hash/student-home.php" class="btn">Home</a>
        <a href="/hash/logout.php" class="btn">Student Logout</a>
		<a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>	
	<div id="topnav-right">		
        <a href="/hash/course-registration.php" class="btn">Course Registration</a>
        <a href="/hash/student-registered-courses.php" class="btn">View Registered Classes</a>    
    </div>
	
</div>	
<p><input type="text" name="username" required placeholder="Enter Your Username" /></p>
<p><input type="text" name="firstname" required placeholder="Enter Your First Name"/></p>
<p><input type="text" name="lastname" required placeholder="Enter Your Last Name"/></p>
<p><input type="email" name="email" required placeholder="Enter Your Email Address"/></p>
<p><input type="text" name="class_name" required placeholder="Enter the Class Name"/></p>

<p><input type="submit" name="submit" value="Add to Waitlist" /></p>


</form>


  
</div>
</body>

</html>