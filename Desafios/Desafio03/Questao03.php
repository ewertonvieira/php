<?php
// Filtrar informacoes. Filtro livre;

$file = 'pessoas.csv';

//abre o arquivo
$fileOpen = fopen($file, 'r');

// Le cabelcalho
$header = fgetcsv($fileOpen, 1000, ',');

// Iterando o arquivo
while (($line = fgetcsv($fileOpen, 1000, ',')) !== false) {
    // Associa linha com cabecalho, usando nome como chave
    $ArrAsso[] = array_combine($header, $line);
}

// fecha o arquivo
fclose($fileOpen);

// Aplicando filtro
echo "<h2> Filtro por idade, menor que 30 anos</h2>";
foreach ($ArrAsso as $item) {
    if ($item['Idade'] < 30) {
        echo "<p>" . $item['Nome'] . ", " . $item['Idade'] . ", " . $item['Cidade'] . "</p>" ;
    }
}

