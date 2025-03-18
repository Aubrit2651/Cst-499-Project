<?php
include('connection.php');

$username = $_SESSION['username'];

$sql = "DELETE FROM summer_network_administration WHERE username = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);

if ($stmt->execute()) {
    echo "Record deleted successfully";
    header('Location: student-home.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$stmt->close();
$conn->close();
?>