<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media do Aluno</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nota1: </label> <br>
        <input type="text" name="nota1" placeholder="ex: 7.0" required> <br>

        <label for="">Nota2: </label> <br>
        <input type="text" name="nota2" placeholder="ex: 7.0" required> <br>

        <label for="">Nota3: </label> <br>
        <input type="text" name="nota3" placeholder="ex: 7.0" required> <br>

        <button type="submit">Media</button>

        <?php
        // Crie três variáveis $nota1, $nota2, $nota3 com valores entre 0 e 10. 
        // Calcule a média e imprima se o aluno foi aprovado (média >= 7) ou 
        // reprovado.

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            $media = ($nota1 + $nota2 + $nota3) / 3;

            echo "<h4>A media das notas($nota1, $nota2 e $nota3): " . htmlspecialchars($media) . "</h4>";
            echo $media == 7 ? '"Aprovado"' : '"Reprovado"';
        }

        ?>
    </form>
</body>

</html>