<?php
$backgroundcolor = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")" ;  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado de color aleatorio</title>
    <style>
        div {
            width: 300px;
            height: 300px;
            background-color: <?php echo $backgroundcolor; ?>;
        }
    </style>
</head>
<body>
    <div></div>
</body>
</html>