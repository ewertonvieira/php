<?php
// eclare duas variáveis $a e $b, atribua a elas números inteiros. 
// Calcule e imprima a soma, subtração, multiplicação e divisão. 
// Verificação de Par ou Ímpar
$a = 10;
$b = 7;

function Operacoes($x, $y)
{
    $soma = $x + $y;
    $sub = $y - $x;
    $mul = $y * $x;
    $div = $y / $x;
    return array($soma, $sub, $mul, $div);
}

function ParImp($x)
{
    $msg = "";
    if ($x % 2 == 0) {
        $msg = "par!";
    } else {
        $msg = "impar!";
    }
    return $msg;
}

list($soma, $sub, $mult, $div) = Operacoes($a, $b);
$tipo = ParImp($a);
$tipo2 = ParImp($b);

echo "Resultado de +, -, * e / dos numeros $a e $b são: <br> $soma, <br> $sub,<br> $mult,<br> $div!<br>";
echo "<br>$a e $b são $tipo e $tipo2 respectivamente";
