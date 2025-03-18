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
		<h1>Edit Registered Students</h1>
		

<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM registered_user WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="admin_update_user.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Username: <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
			First Name: <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
			Last Name: <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
			Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
			Phone Number: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
            <input type="submit" value="Update">
        </form>
        <?php
    } else {
        echo "No user found";
    }
} else {
    echo "Invalid request";
}
?>
</div>
</body>
</html>