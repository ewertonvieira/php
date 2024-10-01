<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Positivo ou Negativo</title>
</head>

<body>
    <form method="post" action="">
        <label for="">Nota: </label> <br>
        <input type="text" name="valor" placeholder="ex: 10" required>

        <button type="submit">Teste</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];


        if ($valor >= 9 && $valor <= 10) {
            echo "Nota A";
        } elseif ($valor >= 7 && $valor <= 8.9) {
            echo "Nota B";
        } elseif ($valor >= 5 && $valor <= 6.9) {
            echo "Nota C";
        } elseif ($valor >= 0 && $valor <= 2.9) {
            echo "Nota F";
        } else {
            echo "Nota INVALIDA";
        }
    }
    ?>
</body>

</html>