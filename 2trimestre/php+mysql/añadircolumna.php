<?php
$servername = "sql307.thsite.top";
$username = "thsi_35748575";
$password = "uS9rA5MT";
$dbname = "thsi_35748575_bdprueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para añadir las nuevas columnas (fullname y email) a la tabla usuarios
$sql = "ALTER TABLE usuarios
        ADD COLUMN fullname VARCHAR(32),
        ADD COLUMN email VARCHAR(60)";
        
if ($conn->query($sql) === TRUE) {
    echo "Columnas añadidas con éxito";
} else {
    echo "Error al añadir columnas: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>