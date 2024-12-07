<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='refresh' content='60'>
    <title>Fecha y hora</title>
</head>
<body>
    <h1>Fecha y hora actual</h1>
<?php
setlocale(LC_TIME, 'es_ES.UTF-8');
$hechayhora = strftime('%A, %d de %B del año %Y y la hora es: %H:%M:%S');
echo "<p>$hechayhora</p>";
?>
</body>
</html>