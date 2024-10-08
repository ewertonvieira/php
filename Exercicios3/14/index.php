<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Menssage</title>
</head>

<style>
    body {
        margin: 10% auto;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 50%;
        margin: auto;
        
    }

    textarea {
        height: 200px;
        border: 0.5px solid purple;
        border-radius: 10px;
        font-size: 1.2em;
        padding: 10px;
    }

    button {
        background-color: blueviolet;
        color: #fff;
        width: 100%;
        border: none;
        height: 40px;
        border-radius: 10px;
        font-size: 1rem;
    }

    h1 {
        color: purple;
        text-align: center;
    }
</style>
<body>
    <form action="" method="post">
        <h1>Mensseger</h2>
        <textarea name="msg" id="" required></textarea>
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