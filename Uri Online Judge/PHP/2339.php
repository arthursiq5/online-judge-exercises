<?php

$entrada = readline();
$entrada = explode(' ', $entrada);

list($competidores, $papelComprado, $folhasPorCompetidor) = array_map(fn($x) => intval($x), $entrada);

if (intdiv($papelComprado, $competidores) >= $folhasPorCompetidor) {
    echo 'S' . PHP_EOL;
} else {
    echo 'N' . PHP_EOL;
}
