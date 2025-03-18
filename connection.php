<?php
session_start();
$servername = "localhost";
$dbname = "student_enroll";
$db_user = "root";
$db_pass = "";
$conn = "";
$conn = mysqli_connect($servername,$db_user,$db_pass,$dbname);

if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>