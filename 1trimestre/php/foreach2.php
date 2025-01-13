<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de for each parte 2</title>
</head>
<body>
<?php
$palabras = array("Gato"=>"Cat", "Perro"=>"Dog", "Ventana"=>"Window", 
"Mesa"=>"Table", "Ratón"=>"Mouse");

$numero = sizeof($palabras);

foreach($palabras as $x => $val) {
  echo "$x = $val<br>";
}

echo "Número de palabras en el array: " . $numero;
?>
</body>
</html>
