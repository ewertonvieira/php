<?php
$arq = '../01/exemplo.txt';
$exemplo_copia = 'exemplo_copia.txt';

if (file_exists($arq)) {
    if (copy($arq, $exemplo_copia)) {
        echo "Copiado com sucesso!";
    } else {
        echo "Falha ao copiar arquivos";
    }
} else {
    echo "Arquivo nao existe";
}
