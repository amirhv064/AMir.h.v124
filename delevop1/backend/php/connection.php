<?php
$servername = "localhost";
$username = "root";
$password = "AMir.h.v124";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "successfully Connected";
?>