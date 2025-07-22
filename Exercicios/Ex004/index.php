<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Ex004</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php
                $valor = $_GET["valor"] ?? "Sem valor";
                $data_inicio = date("m-d-Y", strtotime("-7 days"));
                $data_fim = date('m-d-Y');
                $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $data_inicio . '\'&@dataFinalCotacao=\'' . $data_fim . '\'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao';
                $conteudo_API = file_get_contents($URL); //Busca o conteúdo da URL
                $dados = json_decode($conteudo_API, true); //Converte o conteúdo da URL em um array PHP
                $cotacao = $dados["value"][0]["cotacaoCompra"]; //Pega o valor na posição 0 do array do elemente "cotacaoCompra"
                $valordolar = $valor / $cotacao;

                echo"<p>O valor R$$valor convertido para dólar é <strong>US$" . number_format($valordolar, 2, ",", ".") . "</strong></p>";
                echo"<p>Valor do dólar hoje: <strong>" . number_format($cotacao, 2, ",", ".") . "</strong>";
                echo"<p>Cotação obtida diretamente do site do " . "<a href:https://www.bcb.gov.br><strong>Banco Central do Brasil</strong></a>!</p>";

            ?>
            <form action="index.html">
                <input type="submit" value="Converter outro valor">

            </form>
           
        </main>
        
    </body>
</html>