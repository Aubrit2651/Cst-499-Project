<?php
include('connection.php');
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
<div id="topnav">
        <a href="/hash/student-home.php" class="btn">Home</a>
        <a href="/hash/logout.php" class="btn">Student Logout</a>
		<a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>	
	<div id="topnav-right">		
        <a href="/hash/course-registration.php" class="btn">Course Registration</a>
        <a href="/hash/student-registered-courses.php" class="btn">View Registered Classes</a>    
    </div>
</div>	
		<h1>Welcome to the Registered Course Page</h1>
		<h2><?php echo $_SESSION["username"]; ?> is registered for the following classes:</h2>
</div>
</body>
</html>
<?php
$dbname = 'student_enroll';
$search_username = $_SESSION['username'];
$sql = "SELECT table_name 
        FROM information_schema.tables 
        WHERE table_schema = '$dbname' 
        AND table_name IN (
            SELECT table_name 
            FROM information_schema.columns 
            WHERE table_schema = '$dbname' 
            AND column_name = 'username'
        )";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $table_name = $row["table_name"];
        $stmt = $conn->prepare("SELECT * FROM $table_name WHERE username = ?");
        $stmt->bind_param("s", $search_username);
        $stmt->execute();
        $user_check_result = $stmt->get_result();
        
        if ($user_check_result->num_rows > 0) {
             echo '<div style="font-size:2.00em; text-align: center;">' . $table_name . '<br></div>'; 
        }
        
        $stmt->close();
    }
} else {
    echo "No registered classes found with the specified username";
}
$conn->close();
include('footer.php');
?>

