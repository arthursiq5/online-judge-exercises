<?php

$numero = intval(readline());
$horasTrabalhadas = intval(readline());
$valorHoraTrabalhada = floatval(readline());

$salario = $horasTrabalhadas * $valorHoraTrabalhada;

echo 'NUMBER = ' . $numero . PHP_EOL;
printf("SALARY = U$ %.2f\n", $salario);
