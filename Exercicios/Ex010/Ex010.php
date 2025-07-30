<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex010 - Idade</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--Faça um programa que mostre qual idade o usuário vai ter no ano solicitado -->
        <main>
            <?php 
                $ano_atual = date('Y');
                $ano_consulta = $_REQUEST['anoconsulta'] ?? $ano_atual;
                $ano_nascimento = $_REQUEST['anonascimento'] ?? 0;
            ?>
            <h1>Consulte sua idade</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>">
                <label for="anonascimento">Em que ano você nasceu? </label>
                <input type="number" name="anonascimento" value="<?=$ano_nascimento?>">
                <label for="anoconsulta">Quer saber sua idade em que ano? (atualmente estamos em <?=$ano_atual?>)</label>
                <input type="number" name="anoconsulta" value="<?=$ano_consulta?>">
                <input type="submit" value="Calcular Idade">
            </form>
        </main>
        <section id="Resultado">
            <h2>Calculando sua idade...</h2>
            <?php 
                $idade = $ano_consulta - $ano_nascimento;

                echo"<p>Quem nasceu em $ano_nascimento terá <strong>$idade anos</strong> em $ano_consulta!</p>";
            ?>
        </section>
    </body>
</html>