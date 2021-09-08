<?php

$valoresPares = 0;

for ($i=0; $i < 5; $i++) { 
    $numero = intval(readline());
    if ($numero % 2 == 0)
        $valoresPares++;
}

echo "$valoresPares valores pares" . PHP_EOL;
