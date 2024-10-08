<?php
$arq = '../01/exemplo.txt';
$exemplo_copia = 'exemplo_renomeado.txt';

if (file_exists($arq)) {
    if (rename($arq, $exemplo_copia)) {
        echo "Renomeado com sucesso!";
    } else {
        echo "Falha ao renomear";
    }
} else {
    echo "Arquivo nao existe";
}
