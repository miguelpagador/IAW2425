<?php
// Array de palabras
$palabras = array("Perro", "Gato", "Elefante", "Ballena", "Zorro");

// Ordenar el array de manera lexicográfica
sort($palabras);

// Mostrar las palabras ordenadas
echo "Palabras ordenadas lexicográficamente:<br>";
foreach ($palabras as $palabra) {
    echo "$palabra<br>";
}
?>

