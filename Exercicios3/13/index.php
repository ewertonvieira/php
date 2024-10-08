<?php
$arq = 'texto.txt';
$word = "sol";
$count = 0;

$arq_open = fopen($arq, 'r');
while (!(feof($arq_open))) {
    $line = fgets($arq_open);
    $count += 1;
    if (strripos(strtolower(trim($line)), strtolower(trim($word)))) {
        echo "<p>Linha: $count\nConteudo: $line</p>";
    }
}

fclose($arq_open);
