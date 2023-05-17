<?php

$novo_grenal = 1;

$inter = 0;
$gremio = 0;
$empates = 0;
$quantidade = 0;

while ($novo_grenal == 1) {
    list($golsInter, $golsGremio) = array_map(fn($x) => intval($x), explode(' ', readline()));
    $resultado = $golsInter - $golsGremio;
    $quantidade++;
    if ($resultado > 0) $inter += 1;
    if ($resultado < 0) $gremio += 1;
    if ($resultado == 0) $empates += 1;
    echo "Novo grenal (1-sim 2-nao)" . PHP_EOL;
    $novo_grenal = intval(readline());
}
echo $quantidade . ' grenais' . PHP_EOL;
echo 'Inter:' . $inter . PHP_EOL;
echo 'Gremio:' . $gremio . PHP_EOL;
echo 'Empates:' . $empates . PHP_EOL;
if ($inter > $gremio) {
    echo 'Inter venceu mais' . PHP_EOL;
} else if ($inter < $gremio) {
    echo 'Gremio venceu mais' . PHP_EOL;
} else {
    echo 'Nao houve vencedor' . PHP_EOL;
}
