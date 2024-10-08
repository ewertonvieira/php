<?php
$arquivo = '../01/exemplo.txt';

// Descobrindo se o arquivo existe;
if (file_exists($arquivo)) {
    // Exclui o arquivo
    if (unlink($arquivo)) {
        echo "Arquivo excluido com sucesso";
    } else {
        echo "Erro ao excluir arquivo";
    }
} else {
    echo "Arquivo '../01/exemplo.txt' nao existe, ou nao foi encontrado.";
}
