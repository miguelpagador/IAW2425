<?php
$host = 'sdb-w.hosting.stackcp.net';   
$user = 'gestion_incidencias-323133eda3';   
$pass = "en97j64z81";   
$database = 'gestion_incidencias-323133eda3';     
$conn = mysqli_connect($host,$user,$pass,$database);   
if (!$conn) {                                             
    die("Conexión fallida con base de datos: " . mysqli_connect_error());     
  }
?>


