<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 30%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #5F9EA0;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>

    <h2>Tabela de Produtos</h2>

    <table>
        <thead>
            <tr>
                <th>Key</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $arq = 'arquivo.csv';
            $array_table = [];

            $arq_open = fopen($arq, 'r');

            // le o cabecalho
            $cabecalho = fgetcsv($arq_open, 1000, ',');

            // Iterando o arquivo

            while (($linha = fgetcsv($arq_open, 1000, ',')) !== false) {
                // Aossica linha com cabecalho
                $array_table[] = array_combine($cabecalho, $linha);
            }

            fclose($arq_open);

            // Aplicando linhas a tabela
            foreach ($array_table as $item) {
                echo "<tr>
                        <td>{$item['key']}</td>
                        <td>{$item['name']}</td>
                        <td>{$item['price']} R$</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>