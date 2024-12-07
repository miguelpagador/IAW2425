<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de for each parte 1</title>
</head>
<body>
<?php
/* Crea un array con 4 o 5 refranes. Utiliza foreach para mostrar todos los refranes 
en pantalla cada uno de ellos en un párrafo diferente.*/
$refran = array("No por mucho madrugar amanece más temprano.", 
"A quien a buen árbol se arreima, buena sombra le cobija.", 
"Más vale pájaro en mano que ciento volando.", 
"Abril, aguas mil.");

foreach ($refran as $value) {
  echo "<p>$value</p>";}
    ?>
</body>
</html>