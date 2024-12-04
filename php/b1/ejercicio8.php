<?php
// Generar un color aleatorio
$color = sprintf('#%06X', rand(0, 0xFFFFFF));

echo "<div style='width: 300px; height: 300px; background-color: $color;'></div>";
?>

