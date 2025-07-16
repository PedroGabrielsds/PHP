<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Ex001</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <header>
            <h1>Resultado Ex001</h1>

        </header>
        <main>
            <?php
                $numero = $_GET["numero"] ?? "Nenhum número digitado";

                print("O número digitado foi: $numero <br>");
                print("O seu antecessor é: " . $numero - 1 . "<br>");
                print("O seu sucessor é: " . $numero + 1 . "<br>");
            ?>
        </main>
        <a href="index.html">Voltar</a>
    </body>
</html>