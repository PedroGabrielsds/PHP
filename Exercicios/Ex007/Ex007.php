<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Faça um programa que informe quantos salários minimos existem dentro de um valor!-->
     <main>
        <?php
            $salario = $_REQUEST['salario'] ?? 0;
            $salario_minimo = 1518;
        
        ?>
        <h2>Informe seu salário!</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" step="0.001" name="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salario_minimo, 2, ',', '.')?></strong></p>
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="Resultado"> 
            <h2>Resultado Final</h2>
            <?php
                $qtd_salarios = intdiv($salario, $salario_minimo);
                $resto = $salario % $salario_minimo;

                echo "<p>Quem recebe um salário de R$", \number_format($salario, 2, ',', '.'), " ganha <strong>$qtd_salarios salários mínimos </strong> + R$", number_format($resto, 2, ',', '.') ,"</p>";
        
            ?>
        </section>
</body>
</html>