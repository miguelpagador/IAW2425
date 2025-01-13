<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado aleatorio</title>
    <style>
    #caja {
width: 300px;
height: 300px;
    }
    </style>
</head>
<body>
    <h1>Cuadrado de color aleatorio</h1>
<?php
$rojo = dechex(rand(0,255));
$verde = dechex(rand(0,255));
$azul = dechex(rand(0,255));
$color = "#" . $rojo . $verde . $azul;
echo "<div id='caja' style='background-color:" . $color . "'</div>";
?>
<div id="caja"></div>
</body>
</html>