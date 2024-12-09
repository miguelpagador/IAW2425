<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Superglobales</title>
</head>
<body>
<?php
$navi = $_SERVER['HTTP_USER_AGENT'];
$IP = $_SERVER['REMOTE_ADDR'];
$Ref = $_SERVER['HTTP_REFERER'];
echo "<p>Estás accediendo con la ip $IP</p>";
echo "<p>Estás navegando con $navi</p>";
echo "<p>Referido por $Ref</p>";
?>
</body>
</html>