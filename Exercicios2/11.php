<?php
$soma = 0;
$i = 0;

while (true) {
    $i++;
    $soma += $i;
    if ($soma > 100) {
        break;
    }
}

echo "$i numeros contados!";
