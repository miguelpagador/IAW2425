<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
<?php
include_once 'config.php';
// Esto nos permite guardar variables que vayamos a usar mucho para poder usarlas en todos los lados solo copiando ese include
echo '<p>Carpeta de imágenes: ' . IMGS . '</p>';
echo '<p>Carpeta de PDFs: ' . PDFS . '</p>';
echo '<p>Carpeta de archivos temporales: ' . TEMP . '</p>';
echo '<p>Mi nombre es ' . $minombre . '</p>';
echo '<p>Esto es mi ' . $pagnombre . '</p>';
?>
</body>
</html>