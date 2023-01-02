<?php

$quantidadeDePositivos = 0;

for ($i=0; $i < 6; $i++) { 
    $numero = floatval(readline());
    if ($numero > 0) {
        $quantidadeDePositivos++;
    }
}

echo "$quantidadeDePositivos valores positivos" . PHP_EOL;
