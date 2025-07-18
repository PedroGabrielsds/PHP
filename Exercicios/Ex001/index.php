<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Ex001</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <main>
            <h1>Resultado Ex001</h1>

            <?php
                $numero = $_GET["numero"] ?? "Nenhum número digitado";

                print("O número digitado foi: $numero <br>");
                print("O seu antecessor é: " . $numero - 1 . "<br>");
                print("O seu sucessor é: " . $numero + 1 . "<br>");
            ?>
            <a href="index.html"><button>Voltar</button></a>

        </main>
    </body>
</html>