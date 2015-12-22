<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "spch1";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $conn->connect_error);
}
//echo "Connected successfully";
?> 
