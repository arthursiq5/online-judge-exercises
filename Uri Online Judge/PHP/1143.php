<?php

$entrada = intval(readline());

for ($i = 1; $i <= $entrada; $i++) {
    echo $i . ' ' . pow($i, 2) . ' ' . pow($i, 3) . PHP_EOL;
}
