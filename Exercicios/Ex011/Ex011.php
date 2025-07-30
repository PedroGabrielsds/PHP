<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex011 - PHP Moderno</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--Faça um programa que mostre o reajuste de preço usando como base a porcentagem -->
        <main>
            <?php 
                $porcentagem = $_REQUEST['porcentagem']?? 0;
                $preco = $_REQUEST['preco'] ?? 0;
                $reajuste = (($preco * $porcentagem) / 100);

            ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="preco">Preço do Produto: (R$)</label>
                <input type="number" step="0.01" name="preco" value="<?=$preco?>">
                <label for="porcentagem">Qual será o reajuste? (<span id="valor"><?=$porcentagem?></span>%)</label>
                <input type="range" min="0" max="100" id="porcentagem" name="porcentagem" class="slider-ajustada" value="<?=$porcentagem?>">
                <input type="submit" value="Reajustar">
                
                <script>
                    const barra = document.getElementById("porcentagem");
                    const valor = document.getElementById("valor");

                    barra.oninput = function () {
                        valor.innerText = this.value;
                    };

                </script>

            </form>
        </main>
        <section id="resultado">
                <h2>Resultado do Reajuste</h2>
                <?php 
                    
                    $preco_reajustado = ($preco + $reajuste);
                    
                    echo"<p>O produto que custava R$" . number_format($preco, 2, ',', '.') . " com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>R$"  .number_format($preco_reajustado, 2, ',', '.') . "</strong> a partir de agora.</p>";
                ?>
        </section>
    </body>
</html>