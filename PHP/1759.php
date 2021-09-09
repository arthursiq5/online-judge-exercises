<?php

$quantidade = intval(readline());
$falaDoNoel = "";


for ($i=0; $i < $quantidade; $i++) { 
    $falaDoNoel .= "Ho ";
}

echo trim($falaDoNoel) . "!" . PHP_EOL;
