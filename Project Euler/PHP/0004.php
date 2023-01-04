<?php

function isPalindromo(int $numero) {
    $temp = $numero;
    $novo = 0;
    while(floor($temp)) {
        $d = $temp % 10;
        $novo = $novo * 10 + $d;
        $temp /= 10;
    }
    return $novo == $numero;
}

const FOR_INICIO = 100;
const FOR_FIM = 999;

$maiorPalindromo = 0;
for ($i = FOR_INICIO; $i <= FOR_FIM; $i++) {
    for ($j = FOR_INICIO; $j <= FOR_FIM; $j++) {
        $atual = $i * $j;
        if (isPalindromo($atual) && $atual > $maiorPalindromo) {
            $maiorPalindromo = $atual;
            break;
        }
    }
}

echo $maiorPalindromo . PHP_EOL;
