<?php

define('SENHA', 2002);

$senhaValida = false;

while (!$senhaValida){
    $senhaDigitada = intval(readline());
    $senhaValida = $senhaDigitada == SENHA;
    if (!$senhaValida) echo "Senha Invalida" . PHP_EOL;
}

echo "Acesso Permitido" . PHP_EOL;
