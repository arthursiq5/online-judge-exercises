<?php

function toMes(&$dias)
{
    $meses = floor($dias / 30);
    $dias -= $meses * 30;
    return $meses;
}

function toAno(&$dias)
{
    $anos = floor($dias / 365);
    $dias -= $anos * 365;
    return $anos;
}

$dias = intval(readline());
$anos = toAno($dias);
$meses = toMes($dias);

echo $anos . ' ano(s)' . PHP_EOL;
echo $meses . ' mes(es)' . PHP_EOL;
echo $dias . ' dia(s)' . PHP_EOL;
