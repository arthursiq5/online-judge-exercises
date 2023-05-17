<?php

$soma = 0.0;
$quantidade = 0;
$idade = 0;

while($idade >= 0) {
    $idade = intval(readline());
    if ($idade >= 0) {
        $soma += $idade;
        $quantidade++;
    }
}

printf('%.2f' . PHP_EOL, ($soma/$quantidade));
