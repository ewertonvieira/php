<?php
$arq = '../01/exemplo.txt';

if (file_exists($arq)) {
    echo "exemplo.txt existe";
} else {
    echo "exemplo.txt NAO existe";
}
