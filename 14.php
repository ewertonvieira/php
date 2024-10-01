<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Digite de 1 a 7(respetivos aos dias da semana)</label> <br>
        <input type="text" name="key" placeholder="ex: 1" required>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $key = $_POST['key'];

        $diasSemana = array(1 => "Domingo", 2 => "Segunda-feira", 3 => "Terça-feira", 4 => "Quarta-feira", 5 => "Quinta-feira", 6 => "Sexta-feira", 7 => "Sabado");

        if (array_key_exists($key, $diasSemana) == false) {
            echo "<h4>Chave nao existe, tente outra!</h4>";
        } else {
            echo "<h4> " . htmlspecialchars($diasSemana[$key]) . "</h4>";
        }
    }
    ?>
</body>

</html>