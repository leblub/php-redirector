<?php
// Datei: index.php

$counter_file = 'counter.txt';

// Wenn die Datei nicht existiert, initialisiere sie
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0');
}

// Zähler auslesen und erhöhen
$counter = (int)file_get_contents($counter_file);
$next = ($counter % 2 === 0) ? 'https://twitch.tv/dein-kanal' : 'https://youtube.com/dein-kanal';

// Zähler hochzählen und speichern
file_put_contents($counter_file, $counter + 1);

// Weiterleitung
header("Location: $next");
exit;
