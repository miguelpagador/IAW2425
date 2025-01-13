<?php
$servername = "thsi_38097497_bdpruebas";
$username = "thsi_38097497";
$password = "********";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 