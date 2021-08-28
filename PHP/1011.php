<?php

define('PI', 3.14159);
$raio = floatval(readline());

$volume = (4/3) * PI * pow($raio, 3);

printf("VOLUME = %.3f\n", $volume);
