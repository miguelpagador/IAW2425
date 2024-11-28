<?php
// Generar un emoticono aleatorio
$emoticonos = [
    "😀", "😁", "😂", "🤣", "😃", "😄", "😅", "😆", "😇", "😉"
];

$emoticono = $emoticonos[array_rand($emoticonos)];

echo $emoticono;
?>

