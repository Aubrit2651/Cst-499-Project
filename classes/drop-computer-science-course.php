<?php
include('connection.php');

$username = $_SESSION['username'];

$sql = "DELETE FROM spring_computer_science WHERE username = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);

if ($stmt->execute()) {
     echo "<script>
                    alert('You have successfully dropped out of the Spring Computer Science Course!');
                    window.location.href = 'student-home.php';
                  </script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$stmt->close();
$conn->close();
?>