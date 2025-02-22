<?php
$servername = "sql307.thsite.top";
$username = "thsi_35748575";
$password = "uS9rA5MT";
$dbname = "thsi_35748575_bdprueba";

try {
  $conn = new PDO("mysql:host=$servername;dbname=thsi_35748575_bdprueba", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 