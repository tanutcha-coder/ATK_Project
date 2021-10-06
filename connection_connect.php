<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db21_050";


// create connection
$conn = new mysqli($servername, $username, $password);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->select_db($dbname)) {
    die("Connection failed : " . $conn->connect_error);
} else {
    // echo "connection success";
}