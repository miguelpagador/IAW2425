<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de sort</title>
</head>
<body>
<?php
/*Realiza un script que dado un array de palabras 
lo presente en pantalla ordenado lexicograficamente.*/
$palabras = array("Perro", "Gato", "Búfalo", "Sapo");
sort($palabras);
foreach ($palabras as $value) {
  echo "<p>$value</p>";}
    ?>
</body>
</html>