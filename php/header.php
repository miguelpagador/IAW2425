<?php
header("refresh:3;url=https://sevillafc.es/");
<<<<<<< HEAD
=======
// Esto vale para que podamos incluir redirecciones con una pantalla de carga 
// para comprobar ciertos elementos antes de permitir seguir, por ejemplo, hay 
// de Cloudflare contra DDoS. También vale para evitar mostrar errores de búsqueda.
// O evitar que puedan copiar nuestro enlace con sesión iniciada y abrirlo en
// otro navegador sin tener que iniciar sesión.
>>>>>>> 83faebd4c950448459bb91456ac40772afb554db
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
<?php
echo "Te estamos redirigiendo a nuestra página. Por favor, espera...";
?>
</body>
</html>