<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <!--Faça um programa que mostre a média Aritmética Simpes e Ponderada de dois números -->
        <main>
            <?php 
                $numero_um = $_REQUEST['numero1'] ?? 0;
                $peso_um = $_REQUEST['peso1'] ?? 1;
                $numero_dois = $_REQUEST['numero2'] ?? 0;
                $peso_dois = $_REQUEST['peso2'] ?? 1; 
            ?>
            <h2>Média Aritmética simpes e ponderada</h2>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="numero1">1º Número: </label>
                <input type="number" name="numero1" value="<?=$numero_um?>">
                <label for="peso1">1º Peso: </label>
                <input type="number" name="peso1" value="<?=$peso_um?>">
                <label for="numero2">2º Número: </label>
                <input type="number" name="numero2" value="<?=$peso_dois?>">
                <label for="peso2">2º Peso: </label>
                <input type="number" name="peso2" value="<?=$peso_dois?>">
                <input type="submit" value="Calcular Médias">
            </form>
        </main>
        <section id="Resultado">
            <h2>Calculo das médias!</h2>
            <?php 
                $media_simples = (($numero_um + $numero_dois) / 2);
                $media_ponderada = ((($numero_um * $peso_um) + ($numero_dois * $peso_dois)) / ($peso_um + $peso_dois));

            ?>
            <p>Analisando os números <?=$numero_um?> e <?=$numero_dois?>: </p>
            <ul>
                <li>A <strong>Média Aritmética Simples </strong>entre os valores é igual a <?= number_format($media_simples, 2, ',', '.')?>.</li>
                <li>A <strong>Média Aritmética Ponderada </strong>com pesos <?=$peso_um?> e <?=$peso_dois?> é igual a <?=number_format($media_ponderada, 2, ',', '.')?>.</li>
            </ul>

        </section>
    </body>
</html>