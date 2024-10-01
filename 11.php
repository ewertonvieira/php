<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius para Fahrenheit</title>
</head>

<body>
    <form method="post" action="">
        <label for="">Temperatura: </label> <br>
        <input type="text" name="valor" placeholder="ex: 22 °C" required>

        <button type="submit">Converter</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];
        $f = ($valor * 9/5) + 32;

        echo "$valor °C para $f °F";
    }
    ?>
</body>

</html>