<?php

function calculaDistancia ($x1, $x2, $y1, $y2)
{
    return sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
}

list($x1, $y1) = array_map(fn($x) => floatval($x), explode(' ', readline()));
list($x2, $y2) = array_map(fn($x) => floatval($x), explode(' ', readline()));

printf("%.4f\n", calculaDistancia($x1, $x2, $y1, $y2));
