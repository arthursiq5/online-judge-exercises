<?php

$quantidadeDeConduites = intval(readline());

for ($i=0; $i < $quantidadeDeConduites; $i++) { 
    list($r1, $r2) = array_map(fn($x) => intval($x), explode(' ', readline()));
    $raioConduite = $r1 + $r2;
    echo $raioConduite . PHP_EOL;
}
