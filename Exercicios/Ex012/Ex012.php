<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex012 - Calculadora de tempo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--Faça um programa que leia um valor e diga quanto tempo o valor corresponde -->
        <main>
            <?php 
                $segundos = $_REQUEST['tempo'] ?? 00;
            ?>
            <h1>Calculadora de tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="tempo">Qual é o total de segundos? </label>
                <input type="number" step="0.001" name="tempo" value="<?=$segundos?>">
                <input type="submit" value="Calcular">

            </form>
        </main>
        <section id="Resultado">
            <h2>Calculando Segundos...</h2>
            <?php 
                

                $semanas = floor($segundos / 604800);
                $resto = $segundos % 604800;

                $dias = floor($resto / 86400);
                $resto = $resto % 86400;

                $horas = floor($resto / 3600);
                $resto = $resto % 3600;

                $minutos = floor($resto / 60);
                $segundos_restantes = $resto % 60;

            ?>
            <p>Analisando o valor que você digitou, <strong><?=number_format($segundos, 0, ',', '.')?> segundos</strong> equivalem a um total de: </p>
            <ul>
                <li><?=number_format($semanas, 0)?> semanas</li>
                <li><?=number_format($dias, 0)?> dias</li>
                <li><?=number_format($horas, 0)?> horas</li>
                <li><?=number_format($minutos, 0)?> minutos</li>
                <li><?=number_format($segundos_restantes) ?> segundos</li>
            </ul>
        </section>
    </body>
</html>