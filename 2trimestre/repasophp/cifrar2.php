<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Texto: <input type="text" name="texto" placeholder="Escribe una palabra">
            <input type="submit" value="cifrar">
        </form>
    <?php  
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el texto ingresado por el usuario
        $texto = $_POST["texto"];
        
        $texto_cifrado = crypt($texto, '');
        
        // Mostrar el texto cifrado
        echo "<p>Texto cifrado: " . $texto_cifrado . "</p>";
    }
    ?>
    
</body>
</html>