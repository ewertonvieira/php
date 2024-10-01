<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior ou menor de idade</title>
</head>

<body>
    <form method="post" action="">
        <label for="">Informe sua idade: </label> <br>
        <input type="text" name="idade" placeholder="ex: 18" required>

        <button type="submit">Faixa Etaria</button>
    </form>

    <?php
    // Crie uma variável $idade. Use if-else para verificar se a pessoa 
    // é menor de idade (menos de 18 anos) ou maior de idade e imprima 
    // uma mensagem.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];

        if ($idade >= 18 && $idade <= 120) {
            echo "Maior de idade";
        } elseif ($idade >= 0 && $idade < 18) {
            echo "Menor de idade";
        } else {
            echo "Idade invalida";
        }
    }
    ?>
</body>

</html>