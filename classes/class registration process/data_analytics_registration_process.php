<?php 
include('connection.php');

if(isset($_POST['submit'])){
    // Check the number of registered users
    $sql = "SELECT COUNT(*) AS user_count FROM spring_data_analytics";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        $user_count = $row['user_count'];

        if ($user_count >= 10) {
            // If 10 or more users are registered, redirect to waiting list registration
            echo "<script type='text/javascript'>
                    alert('Sorry, we can\'t register you for this class. The limit for this class is ten and has been already met. You have been redirected to the waiting list registration page.');
                    window.location.href = 'waiting_list_registration.php';
                  </script>";
            exit();
        } else {
            // Register the new user
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            
            $sql = "INSERT INTO spring_data_analytics (username, firstname, lastname, email) VALUES ('$username', '$firstname', '$lastname', '$email')";
            $result = $conn->query($sql);
            
            if($result){
				echo "<script>
                    alert('You have successfully registered for the Spring Data Analyitics Course!');
                    window.location.href = 'student-home.php';
                  </script>";
            } else {
                echo "Try again. Something went wrong<p><a href='course-registration.php'>Register</a>";
            }
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>