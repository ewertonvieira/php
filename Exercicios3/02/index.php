<?php
$arquivo = '../01/exemplo.txt';

$arquivoOpen = fopen($arquivo, 'r');

// Percorre o arquivo
while (!feof($arquivoOpen)) {
    // Seleciona as linhas do arquivo
    $line = fgets($arquivoOpen);
    echo $line;
}

fclose($arquivoOpen);
