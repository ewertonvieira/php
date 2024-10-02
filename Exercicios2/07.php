<?php 
$count = 0;
$arrayNum = [-2, -4, 100, 11, -100, 15, 3, 2, 1, 5 ];

foreach($arrayNum as $num) {
    if ($num > 5) {
        $count += 1;
    }
}
echo "Quantos numeros sao maiores que 5: $count";
?>