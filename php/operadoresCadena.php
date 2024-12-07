<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Cadena</title>
</head>
<body>
<?php
    // Definición de variables de tipo cadena
    $cadena1 = "Hola";
    $cadena2 = "Mundo";

    // Concatenación
    $concatenacion = $cadena1 . " " . $cadena2;
    echo "Concatenación: $concatenacion <br>";

    // Longitud de la cadena
    $longitud1 = strlen($cadena1);
    $longitud2 = strlen($cadena2);
    echo "Longitud de '$cadena1': $longitud1 <br>";
    echo "Longitud de '$cadena2': $longitud2 <br>";

    // Conversión a minúsculas
    $minusculas = strtolower($concatenacion);
    echo "Minúsculas: $minusculas <br>";

    // Conversión a mayúsculas
    $mayusculas = strtoupper($concatenacion);
    echo "Mayúsculas: $mayusculas <br>";

    // Extracción de parte de la cadena
    $subcadena = substr($concatenacion, 0, 4);
    echo "Subcadena: $subcadena <br>";

    // Reemplazo de parte de la cadena
    $reemplazo = str_replace("Mundo", "PHP", $concatenacion);
    echo "Reemplazo: $reemplazo <br>";

    // Comparación de cadenas
    $comparacion = strcmp($cadena1, $cadena2);
    echo "Comparación de '$cadena1' y '$cadena2': $comparacion <br>";

    // Buscar una subcadena en la cadena
    $posicion = strpos($concatenacion, "Mundo");
    echo "Posición de 'Mundo' en la cadena: $posicion <br>";
?>
</body>
</html>