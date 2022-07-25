<?php

$tipo = intval(readline());

$respostas = readline();
$respostas = explode(' ', $respostas);

$respostasCorretas = 0;

foreach ($respostas as $resposta) {
    if (intval($resposta) == $tipo) $respostasCorretas++;
}

echo $respostasCorretas . PHP_EOL;
