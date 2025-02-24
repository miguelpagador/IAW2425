EJERCICIO BIENVENIDA

<?php
session_start();

// Inicializa la variable de sesión para contar las visitas
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

// Incrementa el contador de visitas
$_SESSION['visitas']++;

// Muestra el mensaje de bienvenida y el contador de visitas
if ($_SESSION['visitas'] == 1) {
    echo "Bienvenido, es tu primera visita.";
} else {
    echo "Bienvenido de nuevo. Has visitado esta página " . $_SESSION['visitas'] . " veces.";
}
?>


DESCARGA DE ARCHIVOS

<?php
// Ruta al archivo que se va a descargar
$archivo = 'ruta/al/archivo.txt';

// Verifica si el archivo existe
if (file_exists($archivo)) {
    // Establece los encabezados para la descarga
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($archivo) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($archivo));

    // Lee el archivo y lo envía al navegador
    readfile($archivo);

    // Borra el archivo después de la descarga
    unlink($archivo);
    exit;
} else {
    echo "El archivo no existe.";
}
?>

