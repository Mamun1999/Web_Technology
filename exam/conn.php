<?php
$servername = "localhost:3306/exam";
$username = "root";
$password = "1234mbrs";
$database = 'exam';
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";