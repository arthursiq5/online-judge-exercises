<?php

const PI = 3.14159;

$raio = floatval(readline());
$area = round(PI * pow($raio, 2), 4);

printf('A=%.4f' . PHP_EOL, $area);
