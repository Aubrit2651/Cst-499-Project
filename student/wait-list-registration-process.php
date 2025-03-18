<?php 
include('connection.php');

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $class_name = mysqli_real_escape_string($conn, $_POST['class_name']);
    
    $sql = "INSERT INTO wait_list (username, firstname, lastname, email, class_name) VALUES ('$username', '$firstname', '$lastname', '$email', '$class_name')";
    $result = $conn->query($sql);
    
 if($result){
        echo "<script>
                alert('You have been successfully added to the wait list and you are being redirected to the registered course page.');
                window.location.href = 'student-registered-courses.php';
              </script>";
    } else {
        echo "Try again. Something went wrong<p><a href='waiting_list_registration.php'>Register</a>";
    }

    $conn->close();
}
?>