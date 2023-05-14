<?php

$numero = intval(readline());
$cont = 0;

while ($cont < 6) {
    if ($numero % 2 == 1) {
        echo $numero . PHP_EOL;
        $cont++;
    }
    $numero++;
}
