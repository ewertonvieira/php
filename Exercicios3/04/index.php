<?php 
$arq = 'arquivo.csv';
$count = 0;

$arq_open = fopen($arq, 'r');

while (!feof($arq_open)) {
    $line = fgets($arq_open);
    if (trim($line) !== "") {
        $count += 1;
    }
}

fclose($arq_open);


echo "O Arquivo tem $count linhas. (Nao contando linhas vazias)"
?>