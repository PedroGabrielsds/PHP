<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <!--Faça um programa que analise a raiz quadrada e a raiz cubica de um número-->
        <main>
            <?php
                $numero = $_REQUEST['numero'] ?? 0;

            ?>
            <h2>Informe um número!</h2>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="numero">Número: </label>
                <input type="number" name="numero" value="<?=$numero?>">
                <input type="submit" value="Calcular">
            </form>
        </main>
        <section id="Resultado">
            <h2>Resultado final</h2>
            <p>Analisando o <strong>número <?= $numero ?></strong>, temos: </p>
            <ul>
                <li><p><?="A raiz quadrada de $numero é <strong>", number_format(sqrt($numero), 3, ',', '.') ?></strong></p></li>
                <li><p><?="A raiz cúbica de $numero é <strong>",  number_format(pow($numero, 1/3), 3, ',', '.') ?></strong></p></li>
            </ul>
        </section>
    </body>
</html>