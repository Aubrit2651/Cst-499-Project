<?php
include('connection.php');
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
<div id="topnav">
        <a href="/hash/admin-home.php" class="btn">Home</a>
        <a href="/hash/register-Admin.php" class="btn">Register Admin</a>
		<a href="/hash/waiting_list_registration.php" class="btn">Add to Waiting List</a>	
	<div id="topnav-right">		
        <a href="/hash/register-Student.php" class="btn">Student Registration</a>
        <a href="/hash/logout.php" class="btn">Logout</a>    
    </div>
	
</div>	  
		<h1>Registered Students</h1>
		
</div>
</body>
</html>
<?php


$sql = "SELECT id, username, password, firstname, lastname, email, SSN, address, phone FROM registered_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><div style='text-align: center;'>
            <table border='1' style='margin: 0 auto;'><tr><th>ID</th><th>Username</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>SSN</th><th>Address</th><th>Phone</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<div style='text-align: center;'>
            <table border='1' style='margin: 0 auto;'><tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["SSN"]. "</td><td>" . $row["address"]. "</td><td>" . $row["phone"]. "</td>";
        echo "<td><a href='admin_edit_user.php?id=" . $row["id"] . "'>Edit</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>