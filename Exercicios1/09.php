<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Positivo ou Negativo</title>
</head>

<body>
    <form method="post" action="">
        <label for="">Numero: </label> <br>
        <input type="text" name="valor" placeholder="ex: 22 R$" required>

        <button type="submit">Teste</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];


        if ($valor >= 0) {
            echo "Numero positivo";
        } else {
            echo "Numero negativo";
        }
    }
    ?>
</body>

</html>