<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de while</title>
</head>
<body>
<?php
/*Utilizando una estructura repetitiva while implementa un script PHP que 
se encargue de crear una tabla en HTML con todos los números del 1 al 10 
dispuestos en una columna.*/
$x = 1;

while($x <= 10) {
  echo "<table class='default'><td>$x </td></table>";
  $x++;
}
    ?>
</body>
</html>