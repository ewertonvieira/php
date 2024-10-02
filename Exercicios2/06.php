<?php
$arrayProd = ["Feijao" => 3.0, "Arroz" => 4.50, "Carne de Gado" => 12.32, "Farinha" => 2.22];

foreach ($arrayProd as $prod => $valor) {
    echo "Produto: $prod, Preço: $valor R$<br>";
}
