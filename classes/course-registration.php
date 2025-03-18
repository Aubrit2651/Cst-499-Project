<?php 
include('footer.php');

$mysqli = NEW MySQLi('localhost','root','','student_enroll');
$resultSet = $mysqli->query("Select semester FROM semester_tbl");

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
		<h1>Welcome to the course registration page</h1>
		
<div id="topnav">
        <a href="/hash/student-home.php" class="btn">Home</a>
        <a href="/hash/logout.php" class="btn">Student Logout</a>
		<a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>	
	<div id="topnav-right">		
        <a href="/hash/course-registration.php" class="btn">Course Registration</a>
        <a href="/hash/student-registered-courses.php" class="btn">View Registered Classes</a>    
    </div>
	
</div>		
 
<p> Please select a class offered below in order to register for the class.</p>
<ol>
<li><a href="/hash/spring_computer_science.php" class="btn">Spring Semester- Computer Science</a></li>
<li><a href="/hash/spring_data_analytics.php" class="btn">Spring Semester- Data Analytics</a></li>
<li><a href="/hash/spring_software_design.php" class="btn">Spring Semester- Software Design</a></li>
<li><a href="/hash/spring_pentesting.php" class="btn">Spring Semester- Pentesting</a></li>
<li><a href="/hash/spring_software-programming.php" class="btn">Spring Semester- Software Programming</a></li>
</ol>

<ol>
<li><a href="/hash/summer_cybersecurity.php" class="btn">Summer Semester- Cybersecurity</a></li>
<li><a href="/hash/summer_cloud_computing.php" class="btn">Summer Semester- Cloud Computing</a></li>
<li><a href="/hash/summer_network_administration.php" class="btn">Summer Semester- Network Administration</a></li>
</ol>

<ol>
<li><a href="/hash/fall_machine_learning.php" class="btn">Fall Semester- Machine Learning</a></li>
<li><a href="/hash/fall_ai_essentials.php" class="btn">Fall Semester- AI Essentials</a></li>
<li><a href="/hash/fall_networking.php" class="btn">Fall Semester- Networking</a></li>
<li><a href="/hash/fall_data_center_operations.php" class="btn">Fall Semester- Data Center Operations</a></li>
</ol>
	
</div>

</body>
</html>
