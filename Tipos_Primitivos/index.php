<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos Primitivos em PHP</title>
    </head>
    <body>
        <h1>Tipos Primitivos em PHP</h1>
        <p>Escalares</p>
        <?php
            $sobrenome = "Silva";  #String
            $idade = 20; #inteiro
            $peso = 60.1; #float ou Double
            $casado = false; #Boleano

            
        ?>
        <p>Compostos</p>
        <?php
            # Array 
        
            $vet = [6, 2.5, "Casadas", 3, false];
            var_dump($vet);


            # Object
            class Pessoa {
                private string $sobrenome;

            }

            $p = new Pessoa;
            var_dump($p)
           

        ?>
        <p>Especiais</p>
        <?php
            # Null
            # Resource
            # Callabe
            # Mixed


        ?>
    </body>
</html>