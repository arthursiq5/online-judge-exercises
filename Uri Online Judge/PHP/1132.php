<?php

$a = intval(readline());
$b = intval(readline());
$soma = 0;

for ($i = min($a, $b); $i <= max($a, $b); $i++) {
    if ($i % 13 != 0) {
        $soma += $i;
    }
}

echo $soma . PHP_EOL;
