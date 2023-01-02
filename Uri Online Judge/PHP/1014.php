<?php

$km = floatval(readline());
$combustivel = floatval(readline());

$consumoMedio = $km/$combustivel;

printf("%.3f km/l\n", $consumoMedio);
