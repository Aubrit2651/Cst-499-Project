
<!DOCTYPE HTML>
<html>
<body style="background-image: linear-gradient(to right,green,white,green);">
<head>

<?php
include('footer.php');
?>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/hash/styles.css">
<meta charset="utf-8">
<title>Admin Page</title>
</head>

<body>

 
<div id="wrapper"><h3>Admin Page</h3>
<div id="topnav">
        <a href="/hash/admin-home.php" class="btn">Home</a>
        <a href="/hash/register-Admin.php" class="btn">Register Admin</a>
		<a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>	
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/logout.php" class="btn">Logout</a>    
    </div>
	
</div>	  

<li><a href="/hash/remove-from-course.php" class="btn">Remove A Class For A Student</a></li>
<li><a href="/hash/register-Student.php" class="btn">Register A New Student</a></li>
<li><a href="/hash/course-registration.php" class="btn">Register A Current Student For A Class</a></li>
<li><a href="/hash/view-waitlist.php" class="btn">View Waitlist</a></li>
<li><a href="/hash/admin_view_users.php" class="btn">View Registered Students</a></li>



</div>
</body>

</html>