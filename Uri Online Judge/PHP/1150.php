<?php

$x = intval(readline());
$sum = $x;
$cont = 1;
$z = 0;

do {
    $z = intval(readline());
} while ($z <= $x);

while($sum < $z) {
    $x++;
    $cont++;
    $sum += $x;
}

echo $cont . PHP_EOL;
