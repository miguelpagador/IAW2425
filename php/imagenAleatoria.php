<?php 
$imagenes = array("imagenes/imagen1.jpg", "imagenes/imagen2.jpg","imagenes/imagen3.jpg");
$n = rand(0, count($imagenes) - 1);
$imagenAleatoria = "<img src='$imagenes[$n]' height='400px'>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes aleatorias</title>
</head>
<body>
    <p>
        <?php echo $imagenAleatoria; ?>
    </p>
</body>
</html>