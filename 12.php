<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se é um triangulo</title>
</head>

<body>
    <form method="post" action="">
        <label for="">Lado 1: </label> <br>
        <input type="text" name="lado1" placeholder="ex: 22 cm" required> <br>

        <label for="">Lado 2: </label> <br>
        <input type="text" name="lado2" placeholder="ex: 39 cm" required> <br>

        <label for="">Lado 3: </label> <br>
        <input type="text" name="lado3" placeholder="ex: 10 cm" required> <br>

        <button type="submit">Verificar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado1) &&  $lado2 + $lado3 > $lado1) {
            echo "<h4>Os lados representam um triangulo</h4>";
        } else {
            echo "<h4>Os lados nao representam um triangulo</h4>";
        }
    }
    ?>
</body>

</html>