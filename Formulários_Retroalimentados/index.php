<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários Retroalimentados</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <form action="/Formulários_Retroalimentados/index.php" method="$_GET">
                <label for="valor1">Digite um valor: </label>
                <input type="text" name="valor1" id="idvalor1">
                <label for="valor2">Digite o segundo valor: </label>
                <input type="text" name="valor2" id="idvalor2">

                <input type="submit" name="enviar" id="idenviar">
            </form>
            <?php
                $valor_um = $_GET['valor1'];
                $valor_dois = $_GET["valor2"];
                $soma = $valor_um + $valor_dois;

                


            ?>
        </main>
    </body>
</html>