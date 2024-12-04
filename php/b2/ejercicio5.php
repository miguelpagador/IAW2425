<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refranes</title>
</head>
<body>

<?php
$refranes = [
    "Más vale tarde que nunca.",
    "A quien madruga, Dios le ayuda.",
    "No dejes para mañana lo que puedas hacer hoy.",
    "El que mucho abarca, poco aprieta.",
    "Camarón que se duerme se lo lleva la corriente."
];

foreach ($refranes as $refran) {
    echo "<p>$refran</p>"; // Mostrar cada refrán en un párrafo
}
?>

</body>
</html>

