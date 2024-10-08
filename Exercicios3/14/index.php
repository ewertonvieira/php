<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Menssage</title>
</head>

<body>
    <form action="" method="post">
        <textarea name="msg" id=""></textarea>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $msg = $_POST['msg'];
        $log = 'log.txt';

        $log_open = fopen($log, 'a+');

        // Captura data e hora
        $dataHoraAtual = date('Y-m-d H:i:s');
        fwrite($log_open, $msg . ", " . $dataHoraAtual . "\n");

        fclose($log_open);
    }

    ?>
</body>

</html>