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
$imagenes = 'img';
$lista = glob($imagenes . '/*.jpg'); 

if (count($lista) > 0) {
    $imgrnd = $lista[array_rand($lista)];
    echo "<img src='$imgrnd' alt='Imagen Aleatoria'>";
} else {
    echo "<p>No se encontraron imágenes en el directorio.</p>";
}
?>
</body>
</html>
