<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Ex003</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body> 
        <main>
            <h1>Conversor de moedas 1.0</h1>
            <?php
                $valor  = $_GET["valor"];
                $valor_dolar = $valor / 5.22;

                echo"Seus R$ " . number_format($valor, 2, ',', '.') . " equivalem a <strong>US$ " . number_format($valor_dolar, 2, ',', '.') . "</strong><br>";
                echo"<Strong>Cotação fixa de R$5,22</strong>, informada diretamente do código!";
            ?>
            <a href="index.html"><button>Voltar</button></a>
        </main>
        
    </body>
</html>