<?php
$arquivo = 'text.csv';
$line = '';
$count = 0;
$arr = [];

// Abre o arquivo
$openArquivo = fopen($arquivo, 'r');

// Percorre o $openArquivo
while (!feof($openArquivo)) {
    $line = fgets($openArquivo);
    if (trim($line) !== '') { // Evita linhas vazias
        array_push($arr, $line);
        $count += 1;
    }
}

// fecha o arquivo
fclose($openArquivo);

// Numero de linhas do arquivo;
echo "Numero de linhas: $count";

// Exibi indice + linha do array
foreach ($arr as $key => $value) {
    echo "<p>[$key] ➡️ $value </p>";
}
