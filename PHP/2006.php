<?php

$tipo = intval(readline());

$respostas = explode(' ', readline());

$respostasCorretas = 0;

foreach ($respostas as $resposta) {
    if (intval($resposta) == $tipo) $respostasCorretas++;
}

echo $respostasCorretas . PHP_EOL;
