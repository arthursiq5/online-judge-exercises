<?php

$n = intval(readline());
for ($i = 0; $i < $n; $i++) {
    list($a, $b) = array_map(fn($x) => intval($x), explode(' ', readline()));
    $soma = 0;
    for ($j = min($a, $b) + 1; $j < max($a, $b); $j++) {
        if ($j % 2 == 1) $soma += $j;
    }
    echo $soma . PHP_EOL;
}
