<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen aleatoria</title>
</head>
<body>
    <h1>Esta imagen es aleatoria</h1>
<?php
$imagenes = 'img'; //ruta
$lista = glob($imagenes . '/*.jpg'); //obtener lista
$imgrnd = $lista[array_rand($lista)]; //aplicar azar
echo "<img src='$imgrnd' alt='Imagen Aleatoria'>";
?>
</body>
</html>