<?php
$arquivo = 'datatext.txt';
$palavra = "vida";
$count = 0;

// le o arquivo e armazena em um array
$linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$arquivoOpen = fopen($arquivo, 'r');
foreach ($linhas as $linha) {
    //strpos() verifica se a palavra está presente na linha. Se a palavra for encontrada, a linha correspondente é exibida.
    if (strpos(strtolower($linha), strtolower($palavra)) !== false) {
        $count += 1;
    }
}
fclose($arquivoOpen);

if ($count == 0) {
    echo "A palavra $palavra nao tem correspondencia no texto";
} else {
    echo "A palavra $palavra se repete $count vezes no texto.";
}
