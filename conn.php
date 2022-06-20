<?php
$servername = "localhost:3306/college";
$username = "root";
$password = "1234mbrs";
$database = 'college';
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// $sql = "INSERT INTO student (id, name, department)
// VALUES ('1234abc', 'Mamun', 'CSE')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>