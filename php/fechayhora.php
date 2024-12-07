<?php
date_default_timezone_set('Europe/Madrid');
setlocale(LC_TIME, 'es_ES.UTF-8', 'spanish');
echo "Hoy es " . date("l") . " " . date("d/m/Y") . " y son las " . date("h:i:sa");
?>
