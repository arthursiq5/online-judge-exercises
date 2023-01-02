<?php

function fatorial($n) {
    if ($n > 1) {
        return $n * fatorial($n - 1);
    }
    return 1;
}

$n = intval(readline());

echo fatorial($n) . PHP_EOL;
