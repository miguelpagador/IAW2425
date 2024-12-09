<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de for each parte 3</title>
    <style>
      .tweet {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        border-radius: 8px;
        background-color: #f9f9f9;        
      }
    </style>
</head>
<body>
<?php
$palabras = array("Darío"=>"¿Jugamos al tutti frutti?", "José"=>"Oh, sho soy buenísimo", 
"Luís"=>"¿Cómo es?", "Mario"=>"Es por categoría, hay que buscar una palabra, primero se dice una letra...", 
"Diego"=>"No, no se dice, se elige al azar.");
foreach($palabras as $x => $val) {
  echo "<div class='tweet'>";
  echo "<p><strong>$x:</strong> $val</p>";
  echo "</div>";}
    ?>
</body>
</html>