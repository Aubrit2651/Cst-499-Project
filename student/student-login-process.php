<?php 
include('connection.php');

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = "SELECT id, username, password FROM registered_user WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $username;
            $_SESSION["logged_in"] = true;
            
            setcookie("username", $username, time() + (86400 * 30), "/");
            echo "<script>
                    alert('Student logged in successfully!');
                    window.location.href = 'student-home.php';
                  </script>";
            
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }
}
$conn->close();
?>