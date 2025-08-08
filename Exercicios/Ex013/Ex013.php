<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex013 - Caixa Eletrônico</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--Simule um caixa eletronico que só possua notas de 100, 50, 10 e 5 para realizar um saque! -->
        <main>
            <?php 
                $valor = $_REQUEST['valor'] ?? 0;
            ?>
            <h1>Caixa Eletrônico</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="valor">Sacar: (R$) </label>
                <input type="number" name="valor" value="<?=$valor?>">
                <input type="submit" value="Sacar">
                <p>*Notas disponíveis: R$100, R$50, R$10 E R$5</p>

            </form>
        </main>
        <section id="Resultado">
            <h2>Saque de R$<?=$valor?> realizado</h2>
            <?php 

            ?>
            <p>O caixa eletrônico vai sacar as seguintes notas: </p>
            <ul>
                <li><img src="/Exercicios/Ex013/image/100_back.jpg" alt="100reais">x<?=$variavel?></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>

        </section>
    </body>
</html>