<?php

function maiorAB($a, $b): int
{
    return ($a + $b + abs($a - $b)) / 2;
}

function maiorABC($a, $b, $c): int
{
    return maiorAB(maiorAB($a, $b), $c);
}

list($a, $b, $c) = array_map(fn($x) => intval($x), explode(' ', readline()));
$maior = maiorABC($a, $b, $c);

echo $maior . ' eh o maior' . PHP_EOL;
