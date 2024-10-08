<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Texto</title>
</head>

<body>
    <form action="" method="post">
        <textarea name="addtext" id="" required></textarea>
        <button type="submit">Add</button>
    </form>

    <?php
    // Local do arquivo
    $arquivo = 'data_save.txt';

    // Captura o texto
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $addtext = $_POST['addtext'];
    }

    function VerificarLinha($filename, $addline)
    {
        // Le o arquivo e armazena em um array;
        $linha = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Compara linha por linha com o novo texto
        foreach ($linha as $item) {
            if (trim($item) === trim($addline)) {
                echo "Linha ja existe";
                return true;
            }
        }
        return false;
    }

    // Verifica se a linha ja existe
    if (!VerificarLinha($arquivo, $addtext)) {
        $arquivoOpen = fopen($arquivo, 'a');
        fwrite($arquivoOpen, $addtext . PHP_EOL);
        fclose($arquivoOpen);
        echo "Arquivo add com sucesso!";
    }

    ?>
</body>

</html>