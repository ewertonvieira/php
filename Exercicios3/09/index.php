<?php

$arquivo = 'arquivo.csv';
$format_csv = "";

$arrayAssociativo = [
    ['key' => 1, 'name' => 'Camiseta Branca', 'price' => 29.99],
    ['key' => 2, 'name' => 'Calça Jeans', 'price' => 79.90],
    ['key' => 3, 'name' => 'Tênis Esportivo', 'price' => 149.99],
    ['key' => 4, 'name' => 'Relógio de Pulso', 'price' => 199.99],
    ['key' => 5, 'name' => 'Mochila Escolar', 'price' => 49.50],
    ['key' => 6, 'name' => 'Fone de Ouvido Bluetooth', 'price' => 89.90],
    ['key' => 7, 'name' => 'Smartphone Android', 'price' => 999.99],
    ['key' => 8, 'name' => 'Tablete', 'price' => 499.99],
    ['key' => 9, 'name' => 'Cadeira Gamer', 'price' => 299.90],
    ['key' => 10, 'name' => 'Monitor 24"', 'price' => 699.90],
    ['key' => 11, 'name' => 'Camiseta Estampada', 'price' => 35.00],
    ['key' => 12, 'name' => 'Calça de Moletom', 'price' => 59.90],
    ['key' => 13, 'name' => 'Jaqueta de Couro', 'price' => 249.00],
    ['key' => 14, 'name' => 'Tênis Casual', 'price' => 119.99],
    ['key' => 15, 'name' => 'Sapatilha Feminina', 'price' => 79.90],
    ['key' => 16, 'name' => 'Bolsinha de Couro', 'price' => 89.90],
    ['key' => 17, 'name' => 'Livro de Ficção', 'price' => 29.90],
    ['key' => 18, 'name' => 'Tablet para Crianças', 'price' => 349.99],
    ['key' => 19, 'name' => 'Câmera Digital', 'price' => 599.99],
    ['key' => 20, 'name' => 'Drone com Câmera', 'price' => 899.99],
    ['key' => 21, 'name' => 'Bicicleta de Montanha', 'price' => 699.00],
    ['key' => 22, 'name' => 'Relógio Inteligente', 'price' => 299.00],
    ['key' => 23, 'name' => 'Fone de Ouvido com Fio', 'price' => 49.90],
    ['key' => 24, 'name' => 'Cadeira de Escritório', 'price' => 349.90],
    ['key' => 25, 'name' => 'Sofá de 2 Lugares', 'price' => 1, 199.00],
    ['key' => 26, 'name' => 'Mesa de Jantar', 'price' => 799.90],
    ['key' => 27, 'name' => 'Cama de Casal', 'price' => 1, 299.00],
    ['key' => 28, 'name' => 'Colchão Ortobólico', 'price' => 499.00],
    ['key' => 29, 'name' => 'Micro-ondas', 'price' => 399.00],
    ['key' => 30, 'name' => 'Liquidificador', 'price' => 149.90],
    ['key' => 31, 'name' => 'Batedeira', 'price' => 199.90],
    ['key' => 32, 'name' => 'Torradeira', 'price' => 79.90],
    ['key' => 33, 'name' => 'Fritadeira Elétrica', 'price' => 299.00],
    ['key' => 34, 'name' => 'Geladeira Inox', 'price' => 2, 199.00],
    ['key' => 35, 'name' => 'Fogão 5 Bocas', 'price' => 1, 299.00],
    ['key' => 36, 'name' => 'Cafeteira Elétrica', 'price' => 89.90],
    ['key' => 37, 'name' => 'Máquina de Lavar', 'price' => 1, 599.00],
    ['key' => 38, 'name' => 'Secadora de Roupas', 'price' => 1, 899.00],
    ['key' => 39, 'name' => 'TV 55"', 'price' => 3, 499.00],
    ['key' => 40, 'name' => 'Console de Videogame', 'price' => 2, 999.00],
    ['key' => 41, 'name' => 'Jogo de Tabuleiro', 'price' => 149.90],
    ['key' => 42, 'name' => 'Boneca de Brinquedo', 'price' => 79.90],
    ['key' => 43, 'name' => 'Carrinho de Brinquedo', 'price' => 49.90],
    ['key' => 44, 'name' => 'Bloco de Construção', 'price' => 59.90],
    ['key' => 45, 'name' => 'Pneu para Bicicleta', 'price' => 89.90],
    ['key' => 46, 'name' => 'Bateria para Carro', 'price' => 299.00],
    ['key' => 47, 'name' => 'Kit de Ferramentas', 'price' => 199.00],
    ['key' => 48, 'name' => 'Lanterna LED', 'price' => 39.90],
    ['key' => 49, 'name' => 'Corda de Pular', 'price' => 29.90],
    ['key' => 50, 'name' => 'Tapete Antiderrapante', 'price' => 69.90],
];


$arquivoOpen = fopen($arquivo, 'w');

foreach ($arrayAssociativo as $item) {
    $format_csv = $item['key'] . ", " . $item['name'] . ", " .  $item['price'] . PHP_EOL;
    fwrite($arquivoOpen, $format_csv);
}

fclose($arquivoOpen);
