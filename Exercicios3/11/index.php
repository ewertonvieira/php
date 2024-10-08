<?php
$arq = '../10/arquivo.csv';

$arq_open = fopen($arq, 'a+');

fwrite($arq_open, "51, Cavaquinho, 100.00" . PHP_EOL );

fclose($arq_open);
