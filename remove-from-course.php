<?php 
include('footer.php');
include('connection.php')


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
		<h1>Welcome to the course removal page</h1>
		
<div id="topnav">
        <a href="/hash/student-home.php" class="btn">Home</a>
        <a href="/hash/logout.php" class="btn">Student Logout</a>
			
	<div id="topnav-right">		
        <a href="/hash/course-registration.php" class="btn">Course Registration</a>
        <a href="" class="btn">Contact Us</a>    
    </div>
	
</div>	
 
<p> Please select a class below in order to be removed from the class.</p>
<ol>
<li><a href="/hash/drop-spring-computer-science.php" class="btn">Spring Semester- Computer Science</a></li>
<li><a href="/hash/drop-spring-data-analytics.php" class="btn">Spring Semester- Data Analytics</a></li>
<li><a href="/hash/drop-software-design.php" class="btn">Spring Semester- Software Design</a></li>
<li><a href="/hash/drop-pentesting.php" class="btn">Spring Semester- Pentesting</a></li>
<li><a href="/hash/drop-software-programming.php" class="btn">Spring Semester- Software Programming</a></li>
</ol>

<ol>
<li><a href="/hash/drop-summer-cybersecurity.php" class="btn">Summer Semester- Cybersecurity</a></li>
<li><a href="/hash/drop-cloud-computing.php" class="btn">Summer Semester- Cloud Computing</a></li>
<li><a href="/hash/drop-network-admin.php" class="btn">Summer Semester- Network Administration</a></li>
</ol>

<ol>
<li><a href="/hash/drop-machine-learning.php" class="btn">Fall Semester- Machine Learning</a></li>
<li><a href="/hash/drop-ai-essentials.php" class="btn">Fall Semester- AI Essentials</a></li>
<li><a href="/hash/drop-networking.php" class="btn">Fall Semester- Networking</a></li>
<li><a href="/hash/drop-data-center-operations.php" class="btn">Fall Semester- Data Center Operations</a></li>
</ol>

	
</div>

</body>
</html>
