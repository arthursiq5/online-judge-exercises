<?php

readline();
$salarioFixo = floatval(readline());
$vendas = floatval(readline());

$salarioTotal = $salarioFixo + $vendas * 0.15;

printf("TOTAL = R$ %.2f\n", $salarioTotal);
