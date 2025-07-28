<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Faça um programa que informe quantos salários minimos existem dentro de um valor!-->
    <?php
        $url = "http://ipeadata.gov.br/api/odata4/Metadados?$filter=SERIE_CODIGO eq 'MTE12_SALMIN12'&$format=json
;


        $conteudo = file_get_contents($url);

        $dados = json_decode($conteudo, true);

        var_dump($dados);
    
    ?>
</body>
</html>