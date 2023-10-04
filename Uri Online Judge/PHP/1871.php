<?php

while(true) {
    list($num1, $num2) = array_map(fn($x) => intval($x), explode(' ', readline()));
    if ($num1 == 0 && $num2 == 0) break;
    $resultado = (string)($num1 + $num2);
    $resultado = str_replace('0', '', $resultado);
    echo $resultado . PHP_EOL;
}
