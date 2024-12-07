<?php
$refranes = array("Más vale pájaro en mano que ciento volando.", 
"El que tiene boca se equivoca.", "No hay mal que por bien no venga.", 
"El hábito no hace al monje.", "El que a hierro mata, a hierro muere.");
echo "<ul>";
foreach ($refranes as $refran) {
    echo "<li>$refran</li>";
};
echo "</ul>";
?>