<?php

$n = intval(readline());
$valoresPorGrama = [];

for ($i = 0; $i < $n; $i++) {
    $row = explode(' ', readline());
    $p = floatval($row[0]);
    $g = intval($row[1]);

    $valoresPorGrama[] = ($p * 1000) / $g;
}

$menorValor = min($valoresPorGrama);

echo sprintf('%.2f', $menorValor) . PHP_EOL;
