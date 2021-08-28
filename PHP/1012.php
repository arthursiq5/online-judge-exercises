<?php

define('PI', 3.14159);
list($a, $b, $c) = array_map(fn($x) => floatval($x), explode(' ', readline()));

$triangulo = ($a * $c) / 2;
$circulo = PI * pow($c, 2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = pow($b, 2);
$retangulo = $a * $b;

printf("TRIANGULO: %.3f\n", $triangulo);
printf("CIRCULO: %.3f\n", $circulo);
printf("TRAPEZIO: %.3f\n", $trapezio);
printf("QUADRADO: %.3f\n", $quadrado);
printf("RETANGULO: %.3f\n", $retangulo);
