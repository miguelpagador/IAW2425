<?php
$diccionario = array("Hola" => "Hello", "Lunes" => "Monday", 
"Bicicleta" => "Bike", "Coche" => "Car", 
"Perro" => "Dog", "Ordenador" => "Computer");
echo "<ul>";
foreach($diccionario as $elemento => $traduccion){
echo "<li>La palabra $elemento se traduce al inglés como $traduccion</li>";};
echo "</ul>";
?>

