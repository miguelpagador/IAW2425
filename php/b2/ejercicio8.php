<?php
// Mostrar la dirección IP del usuario
echo "Dirección IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";

// Mostrar el navegador del usuario
echo "Navegador: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// Mostrar la página previa que refería al usuario (si existe)
if (isset($_SERVER['HTTP_REFERER'])) {
    echo "Página de referencia: " . $_SERVER['HTTP_REFERER'] . "<br>";
} else {
    echo "No hay página de referencia disponible.<br>";
}
?>

