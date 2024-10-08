<?php
$count = 0;
$arq = 'electronic-card-transactions-august-2024-csv-tables.xlsx.csv';

$arq_open = fopen($arq, 'r');

if ($arq_open) {
    while (!(feof($arq_open))) {
        $line = fgets($arq_open);
        if (trim($line) !== "") {
            $count += 1;
        }
    }
} else {
    echo "Erro ao abrir arquivo";
}

fclose($arq_open);

echo "Numero de paginas do arquivo é: $count";
