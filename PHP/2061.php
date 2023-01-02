<?php

list($n, $m) = array_map(fn($val) => intval($val), explode(' ', readline()));

for ($i = 0; $i < $m; $i++) {
    $acao = readline();
    if ($acao == 'fechou') {
        $n++;
        continue;
    }
    if ($acao == 'clicou') {
        if ($n > 0) {
            $n--;
            continue;
        }
    }
}

echo $n . PHP_EOL;
