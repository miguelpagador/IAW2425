<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días para la Feria</title>
</head>
<body>

<?php
$fechaActual = new DateTime();

$fechaFeria = new DateTime('2025-05-06');

$diferencia = $fechaActual->diff($fechaFeria);

if ($fechaFeria > $fechaActual) {
    echo "Faltan " . $diferencia->days . " días para que comience la Feria de 2025.";
}
?>

</body>
</html>

