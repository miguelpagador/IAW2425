<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores numéricos</title>
</head>
<body>
<?php
    $a = 5;
    $b = 3;

    $suma = $a + $b;
    echo "<p>Suma: $a + $b = $suma</p>";
    
    $resta = $a - $b;
    echo "<p>Resta: $a - $b = $resta</p>";
    
    $multi = $a * $b;
    echo "<p>Multiplicación: $a * $b = $multi</p>";
    
    $division = $a / $b;
    echo "<p>División: $a / $b = $division</p>";
    
    $resto = $a % $b;
    echo "<p>Resto de la división: $a % $b = $resto</p>";
    
    $a++;
    echo "<p>El número siguiente de 5 es $a</p>";

    $nose = $a+=2;
    echo "<p>Y si le aumentamos el valor en 2 sale $nose</p>";

    $sise = $a-=3;
    echo "<p>De forma que si le disminuimos el valor en 3 sale $sise</p>";
    
    $a--;
    echo "<p>Y su número anterior es $a</p>";

    $potencia = $a ** $b;
    echo "</p>El resultado de elevar $a a $b es $potencia</p>";

    $raiz = pow($a, 1/$b);
    echo "<p>El resultado de hacer la raíz $b-ésima de $a es $raiz</p>";
    ?>
</body>
</html>