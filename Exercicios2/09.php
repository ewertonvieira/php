<?php
$soma = 0;
$numeros = [100, 22, -100, -3, 9, 10, 11, 12, -22];

foreach ($numeros as $item) {
    $soma += $item;
}

echo "$soma";
