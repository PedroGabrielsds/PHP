<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manipulando Strings em PHP</title>
    </head>
    <body>
        <h1>Manipulação de Strings em PHP</h1>
        <p>Quatro formatos de Strings</p>
        <?php
            //Single Quoted:
            //$string = 'PHP\u{1F418}';


            //Double Quoted 
            $String = "PHP\u{1F418}";

            $nome = 'Pedro';
            $sobrenome = "Silva";
            echo "$nome $sobrenome";

            //Sequências de Escape
            // \n - Nova Linha
            // \t - Tabulação Horizontal
            // \\ - Barra Invertida
            // \$ - Sinal de Cifrão
            // \u{} - Codepoint Unicode


            //Sintaxe Heredoc
            $curso = "PHP";
            $ano = date('Y');
            echo <<< FRASE
                Estou estudando
                    $curso em $ano
                        Abraços!
            FRASE;

            //Sintaxe NowDoc - Não interpreta
            $curso = "PHP";
            $ano = date('Y');
             echo <<< 'FRASES'
                Estou estudando
                    $curso em $ano
                        Abraços!
            FRASES;
        ?>
    </body>
</html>