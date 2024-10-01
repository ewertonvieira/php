<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Desconto</title>
</head>

<body>
    <form method="post" action="">
        <label for="">Valor da compra: </label> <br>
        <input type="text" name="vcompra" placeholder="ex: 22.0 R$" required>

        <button type="submit">Calc Desconto</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vcompra = $_POST['vcompra'];


        if ($vcompra > 100) {
            echo "<h4>" . htmlspecialchars((($vcompra * 10) / 100) + $vcompra) . " R$</h4>";
        } else {
            echo "$vcompra R$";
        }
    }
    ?>
</body>

</html>