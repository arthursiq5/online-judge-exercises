<?php

$n = intval(readline());

$mediaPonderada = fn ($a, $b, $c) => ($a*2 + $b*3 + $c*5) / 10;

for ($i = 0; $i < $n; $i++) {
    list($a, $b, $c) = array_map(fn($x) => floatval($x), explode(' ', readline()));
    printf("%.1f\n", $mediaPonderada($a, $b, $c));
}
