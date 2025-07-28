<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários Retroalimentados</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            $valor_um = $_REQUEST['valor1'] ?? 0;
            $valor_dois = $_REQUEST["valor2"] ?? 0;
            
        ?>
        <main>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="$_GET">
                <label for="valor1">Digite um valor: </label>
                <input type="number" name="valor1" id="idvalor1" step="0.001" value="<?=$valor_um?>">
                <label for="valor2">Digite o segundo valor: </label>
                <input type="number" name="valor2" id="idvalor2" step="0.001" value="<?=$valor_dois?>">

                <input type="submit" value="Somar">
            </form>
            
           
        </main>
        <section id="Resultado">
            <h2>Resultado da soma</h2>
            <?php
                $soma = $valor_um + $valor_dois;
                echo "<p> O valor da soma entre <strong>$valor_um</strong> e <strong>$valor_dois</strong> é igual a: <strong>$soma</strong> </p>"


            ?>
        </section>
    </body>
</html>