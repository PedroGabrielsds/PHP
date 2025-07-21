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
                $numero = (float) $_GET["numeroreal"] ?? 0;
                $parte_fracinaria = $numero - ((int)$numero);
                echo "Analisando o número <strong>$numero</strong> informado pelo usuário: <br>";
                echo"<ul>";
                echo "<li>A parte <strong>inteira</strong> do número é <strong>" . floor((int)$numero) . "</strong></li><br>";
                echo "<li>A parte <strong>fracionária</strong> do número é <strong>" . number_format($parte_fracinaria, 2, ",", ".") . "</strong></li>";
                echo"</ul>";

            ?>
            <form action="index.html">
                <input type="submit" value="Analisar Novamente">

            </form>
        </main>
    </body>
</html>