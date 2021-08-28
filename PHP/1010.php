<?php

$peca1 = explode(' ', readline());
$peca2 = explode(' ', readline());

$valorTotal = ($peca1[1] * $peca1[2]) + ($peca2[1] * $peca2[2]);

printf("VALOR A PAGAR: R$ %.2f\n", $valorTotal);
