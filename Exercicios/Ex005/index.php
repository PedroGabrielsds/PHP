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
                $numero = (float) $_GET["numeroreal"];

                echo "Analisando o número <strong>$numero</strong> informado pelo usuário: <br>";
                echo "<li>A parte inteira do número é <strong>" . floor((int)$numero) . "</strong></li>";
                echo "<li>A parte fracionária do número é <strong>" . ($numero - (int)$numero) . "</strong></li>";
            ?>
        </main> 
    </body>
</html>