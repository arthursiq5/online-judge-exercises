<?php

function printMessage($v, $n)
{
    echo $v . ' nota(s) de R$ ' . $n . ',00' . PHP_EOL;
}

$cedulas = [100, 50, 20, 10, 5, 2, 1];

$valor = intval(readline());
echo $valor . PHP_EOL;

foreach($cedulas as $cedula) {
    $valorCedulas = $valor - ($valor % $cedula);
    $quantidadeCedulas = $valorCedulas / $cedula;
    $valor -= $valorCedulas;
    printMessage($quantidadeCedulas, $cedula);
}
