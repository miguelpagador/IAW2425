<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pillar contenido</title>
</head>
<body>
<?php
$pagina = 'https://sevillafc.es/';
$contenido = file_get_contents($pagina);
echo '<p>Contenido de la página:</p>';
echo '<pre>' . htmlspecialchars($contenido) . '</pre>';
?>    
</body>
</html>