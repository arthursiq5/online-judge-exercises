<?php

function regraMaiores($a, $b, $c, $d): bool
{
    return $b > $c && $d > $a;
}

function regraSomaMaiores($a, $b, $c, $d): bool
{
    return ($c + $d) > ($a + $b);
}

function valida($a, $b, $c, $d): bool
{
    return regraMaiores($a, $b, $c, $d)
        && regraSomaMaiores($a, $b, $c, $d)
        && $c >= 0
        && $d >= 0
        && $a % 2 == 0;
}

function retornaMensagem(bool $valido): string
{
    if ($valido) {
        return "Valores aceitos";
    }
    return "Valores nao aceitos";
}

list($a, $b, $c, $d) = array_map(fn($x) => intval($x), explode(' ', readline()));

echo retornaMensagem(valida($a, $b, $c, $d)) . PHP_EOL;
