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
        <a href="/hash/admin-home.php" class="btn">Home</a>
        <a href="/hash/register-Admin.php" class="btn">Register Admin</a>
		<a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>	
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/logout.php" class="btn">Logout</a>    
    </div>
	
</div>	  
		<h1>Welcome to the Student Waitlist</h1>
		
</div>
</body>
</html>
<?php

$sql = "SELECT * FROM wait_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<div style='text-align: center;'>
            <table border='1' style='margin: 0 auto;'>
            <tr>
				<th>Id</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Class Name</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>" . $row["Id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["firstName"] . "</td>
                <td>" . $row["lastName"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["class_name"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

include('footer.php');
?>