<?php

$tempo = intval(readline());
$velocidade = intval(readline());

$distancia = $velocidade * $tempo;
$combustivelGasto = $distancia / 12;

printf("%.3f\n", $combustivelGasto);
