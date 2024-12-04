<?php
// Array de tweets
$tweets = array(
    "Me encanta la programación en PHP! #php",
    "Hoy es un buen día para aprender algo nuevo! #aprendizaje",
    "Las funciones en PHP son muy poderosas #programación",
    "¿Alguien más ama los desafíos de código? #retos"
);

// Función para mostrar un tweet con formato
function mostrarTweet($tweet) {
    echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px; background-color: #f1f1f1;'>";
    echo "<p><strong>@usuario</strong>: $tweet</p>";
    echo "</div>";
}

// Recorrer y mostrar los tweets
foreach ($tweets as $tweet) {
    mostrarTweet($tweet);
}
?>

