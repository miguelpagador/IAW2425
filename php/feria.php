<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feria de Sevilla</title>
</head>
<body>
    <h1>Días hasta la feria de Sevilla:</h1>
<?php
$feria = strtotime("2024-04-14");
$hoy = time();
$segundos = $feria - $hoy;
$dias = ceil($segundos / (60 * 60 * 24));
echo "<p>Faltan $dias días para el inicio de la Feria de abril de 2024.</p>";
?>
</body>
</html>