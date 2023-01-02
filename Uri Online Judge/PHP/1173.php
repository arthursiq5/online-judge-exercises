<?php

$entrada = intval(readline());

for ($i=0; $i < 10; $i++) { 
    echo "N[$i] = $entrada" . PHP_EOL;
    $entrada += $entrada;
}
