<?php

function delta(float $a, float $b, float $c): float
{
    return ($b * $b) - (4 * $a * $c);
}

function resultado1(float $a, float $b, float $c): float
{
    $numerador = -$b + sqrt(delta($a, $b, $c));
    $denominador = 2.0 * $a;
    return $numerador / $denominador;
}

function resultado2(float $a, float $b, float $c): float
{
    $numerador = -$b - sqrt(delta($a, $b, $c));
    $denominador = 2.0 * $a;
    return $numerador / $denominador;
}

list($a, $b, $c) = array_map(fn($x) => floatval($x), explode(' ', readline()));

if (delta($a, $b, $c) < 0 or $a == 0){
    echo "Impossivel calcular\n";
}else{
    printf("R1 = %.5f\n", resultado1($a, $b, $c));
    printf("R2 = %.5f\n", resultado2($a, $b, $c));
}
