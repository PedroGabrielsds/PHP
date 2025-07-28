<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex006 - Anatomia de divisão</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Faça um programa que mostre a anatomia de uma divisão -->
        <main>
            <?php 
                $dividendo = $_REQUEST['dividendo'] ?? 0;
                $divisor = $_REQUEST['divisor'] ?? 0;
                
            ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="dividendo">Dividendo: </label>
                <input type="number" step="0.01" name="dividendo" value="<?=$dividendo?>">
                <label for="divisor">Divisor: </label>
                <input type="number" step="0.01" name="divisor" value="<?=$divisor?>">
                <input type="submit" value="Dividir">

            </form>
        </main>
        <section id="Resultado">
            <?php
                $resto = $dividendo % $divisor;
                $quociente = $dividendo / $divisor; 
            ?>
            <h2>Estrutura da divisão</h2>
            <div class="divisao">
                <div class="dividendo"><?php echo"$dividendo"?></div>
                <div class="divisor"><?php echo"$divisor"?></div>
                <div class="quociente"><?php echo"$quociente"?></div>
                <div class="resto"><?php echo"$resto"?></div>
                <div class="linha-vertical"></div>
                <div class="linha-horizontal"></div>
            </div>
        </section>
    </body>
</html>