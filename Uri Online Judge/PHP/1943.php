<?php

$colocacao = intval(readline());
$topX = [1, 3, 5, 10, 25, 50, 100];

foreach ($topX as $x) {
    if ($colocacao <= $x) {
        echo "Top " . $x . PHP_EOL;
        break;
    }
}
