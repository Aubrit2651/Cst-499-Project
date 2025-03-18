<!DOCTYPE HTML>
<html>
<body style="background-image: linear-gradient(to right,green,white,green);">
<head>

<?php
include('footer.php');

session_start();

$timeout_duration = 300; // 5 minutes in seconds

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    if (isset($_SESSION['last_activity'])) {
        $session_lifetime = time() - $_SESSION['last_activity'];
        if ($session_lifetime > $timeout_duration) {
            session_unset();
            session_destroy();
            header('Location: /hash/Student-login.php');
            exit();
        }
    }
    $_SESSION['last_activity'] = time();
} else {
    header('Location: /hash/Student-login.php');
    exit();
}
?>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/hash/styles.css">
<meta charset="utf-8">
<title>Student Home Page</title>
</head>

<body>

<div id="wrapper"><h3>Student Home Page</h3>
<div id="topnav">
    <a href="/hash/student-home.php" class="btn">Home</a>
    <a href="/hash/logout.php" class="btn">Student Logout</a>
    <a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>    
    <div id="topnav-right">        
        <a href="/hash/course-registration.php" class="btn">Course Registration</a>
        <a href="/hash/student-registered-courses.php" class="btn">View Registered Classes</a>    
    </div>
</div>    
<h1>Welcome <?php echo $_SESSION["username"]; ?></h1>

<ol>
    <li><a href="/hash/remove-from-course.php" class="btn">Drop A Class</a></li>
    <li><a href="/hash/student-registered-courses.php" class="btn">View Current Registered Classes</a></li>
    <li><a href="/hash/course-registration.php" class="btn">Register For A Class</a></li>
</ol>

</div>
</body>

</html>