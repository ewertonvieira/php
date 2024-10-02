<?php
echo "Digite um número entre 1 e 10: ";
$entrada = fgets(STDIN);

$entrada = trim($entrada);
$entrada = (int)$entrada;

$random = rand(1, 10);

if ($entrada === $random) {
    echo "Você acertou! O número era $random.\n";
} else {
    echo "Você errou! O número era $random.\n";
}
?>
