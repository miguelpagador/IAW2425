<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoticono aleatorio</title>
</head>
<body>
<?php
$numeros = rand(128512, 128586);
$emoji = html_entity_decode("&#$numeros;", ENT_COMPAT, 'UTF-8');
echo "<p>Emoticono Aleatorio: $emoji</p>";
?>
</body>
</html>