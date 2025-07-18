<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Ex002</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <!-- 
            Faça um programa que gere um número aleatório ao apertar o botão
        -->
        <main>
            <?php
                echo"<h1>Trabalhando com números aleatórios</h1>";
                echo"Gerando um número aleatótio entre 0 e 100...";
                $valor_gerado = rand(0, 100);
                #Outrass formas de randomizar:
                #mt_rand($min, $max);
                #random_int(); Gera números aleatórios criptograficamente seguros
                
                echo"<p>O valor gerado foi: $valor_gerado </p>";
            ?>
            <a href="index.php"><button type="submit"> 🔄 Gerar Outro</button></a>
        </main>
    </body>
</html>