<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Numero</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Numero:</label> <br>
        <input type="text" name="num1" placeholder="ex: 22" required> <br>

        <label for="">Numero:</label> <br>
        <input type="text" name="num2" placeholder="ex: 22" required> <br><br>

        <button type="submit">Maior?</button> <br><br>
    </form>

    <?php
    // Crie duas variáveis $num1 e $num2. Use uma estrutura if-else para
    // determinar qual dos dois números é o maior e imprima o resultado.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 < $num2) {
            echo "$num2 é maior";
        } else if ($num2 < $num1) {
            echo "$num1 é maior";
        } else {
            echo "Os numeros sao iguais.";
        }
    }

    ?>
</body>

</html>