<?php
// Array con nombres de imágenes dentro de la carpeta 'images'
$imagenes = ["image1.jpg", "image2.jpg", "image3.jpg"];

// Selecciona una imagen aleatoria del array
$imagen = $imagenes[array_rand($imagenes)];

// Muestra la imagen aleatoria
echo "<img src='images/$imagen' alt='Imagen aleatoria' style='width: 300px; height: 300px;'>";
?>

