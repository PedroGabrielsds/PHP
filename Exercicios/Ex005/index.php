<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Ex005</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <h1>Analisador de Número Real</h1>
            <?php
                $numero = $_GET["numero"];
                echo"Analisando o número <strong>$numero<\strong> informado pelo usuário: <br>\n";
                echo"A parte inteira do número é <strong>" . number_format($numero, 1,) . "<\strong><br>";
                echo"A parte fracionária do número é <strong>" . number_format($numero, 2, ",") . "<\strong>";
            ?>
        </main> 
    </body>
</html>