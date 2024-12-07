<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores con Cadenas en PHP</title>
</head>
<body>

<?php
    // Definición
    $c1 = "Hola";
    $c2 = "chato";

    // Concatenación
    $mezcla = $c1 . " " . $c2;
    echo "<p>Concatenación: $mezcla</p>";

    // Tamaño
    $tm1 = strlen($c1);
    $tm2 = strlen($c2);
    echo "<p>El tamaño de '$c1'es $tm1</p>";
    echo "<p>El tamaño de '$c2'es $tm2</p>";

    // Conversión a minúsculas
    $minu = strtolower($mezcla);
    echo "<p>Todo en minúsculas: $minu</p>";

    // Conversión a mayúsculas
    $mayu = strtoupper($mezcla);
    echo "</p>Todo en mayúsculas: $mayu</p>";

    // Quitar de la cadena
    $sub = substr($mezcla, 2, 6);
    echo "<p>Al substraer podemos decir: Niño, trae $sub</p>";

    // Reemplazo
    $mezcla2 = $c1 . " " . $c2;
    echo "<p>La nueva concatenación comienza igual: $mezcla2</p>";
    $mezcla2 = str_replace("Hola", "nueva", $mezcla2);
    $mezcla2 = str_replace("chato", "cosa", $mezcla2);
    echo "</p>Pero tras el reemplazo sale una $mezcla2 </p>";

    // Comparación
    $compare = strcmp($c1, $c2);
    echo "<p>Comparación de '$c1' y '$c2' en términos numéricos sale: $compare</p>";

    // Posición
    $busca = strpos($mezcla, "chato");
    echo "<p>Posición de 'chato' en la cadena: $busca</p>";
?>

</body>
</html>