<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "contact_info";
 
// Create database connection
$conn = new mysqli($host, $user, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>