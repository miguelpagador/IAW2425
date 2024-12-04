<?php
// Array asociativo con palabras en español y su traducción en inglés
$palabras = array(
    "Hola" => "Hello",
    "Adiós" => "Goodbye",
    "Amigo" => "Friend",
    "Perro" => "Dog",
    "Gato" => "Cat"
);

// Función que cuenta el número de elementos en el array
function contarPalabras($array) {
    return count($array);
}

// Mostrar total de palabras
echo "Total de palabras en el array: " . contarPalabras($palabras) . "<br><br>";

// Mostrar las palabras con su traducción
foreach ($palabras as $espanol => $ingles) {
    echo "$espanol => $ingles<br>";
}
?>

