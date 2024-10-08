<?php
$arquivo = 'exemplo.txt';

$arquivoOpen = fopen($arquivo, 'w');
fwrite($arquivoOpen, "Ola, mundo!");
fclose($arquivoOpen);
