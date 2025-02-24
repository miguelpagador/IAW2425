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


DESCARGA CON ENLACE

<?php
// Ruta al archivo que se va a descargar
$archivo = 'Miguel.png';

// Verifica si se ha hecho clic en el enlace de descarga
if (isset($_GET['descargar']) && file_exists($archivo)) {
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

    // Borra el archivo después de la descarga (opcional)
    // unlink($archivo); // Descomenta esto si quieres eliminar el archivo después de la descarga

    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar archivo</title>
</head>
<body>
    <h1>Haz clic para descargar el archivo</h1>
    <a href="?descargar=true">Descargar archivo</a>
</body>
</html>


DESCARGA AUTOMATICA ELIMINANDO

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



DESCARGA AUTOMATICA SIN BORRAR

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

    exit;
} else {
    echo "El archivo no existe.";
}
?>


DESCARGA CON MENSAJES
<?php
// Ruta al archivo que se va a descargar
$archivo = 'ruta/al/archivo.txt';

// Verifica si se ha hecho clic en el enlace de descarga
if (isset($_GET['descargar']) && file_exists($archivo)) {
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

    // Después de la descarga, redirige a la misma página con un mensaje
    header("Location: ?mensaje=descargado");
    exit;
}

// Verifica si el parámetro de mensaje está presente
if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'descargado') {
    echo "<p>El archivo se ha descargado correctamente.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar archivo</title>
</head>
<body>
    <h1>Haz clic para descargar el archivo</h1>
    <a href="?descargar=true">Descargar archivo</a>
</body>
</html>
