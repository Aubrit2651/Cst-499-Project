<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "UPDATE registered_user SET username='$username', firstname='$firstname', lastname='$lastname', email='$email', address='$address', phone='$phone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
                    alert('Record updated successfully, You have been redirected back to the home page.');
                    window.location.href = 'admin-home.php';
                  </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>