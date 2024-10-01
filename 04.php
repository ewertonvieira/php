<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcao Calculadora</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Primeiro numero</label> <br>
        <input type="text" name="n1" placeholder="0"><br>
        <label for="">Segundo numero</label><br>
        <input type="text" name="n2" placeholder="0"><br>
        <label for="">Operacao</label><br>
        <input type="text" name="op" placeholder="ex: +. -, *, /"><br><br>
        <button type="submit">Calcular</button><br><br>
    </form>
    <?php
    // Crie uma função chamada calculadora que recebe três parâmetros:
    // dois números e um operador (+, -, *, /). Use if-else para realizar
    // a operação correspondente e retornar o resultado.

    function Operacoes($x, $y, $op)
    {
        if ($op == "+") {
            echo "$x + $y = " . htmlspecialchars($x + $y);
        } elseif ($op == "-") {
            echo "$x - $y = " . htmlspecialchars($x - $y);
        } elseif ($op == "*") {
            echo "$x * $y = " . htmlspecialchars($x * $y);
        } else if ($op == "/") {
            echo "$x / $y = " . htmlspecialchars($x / $y);
        } else {
            echo "Operacao invalida!";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];

        Operacoes($n1, $n2, $op);
    }

    ?>
</body>

</html>