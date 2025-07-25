<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SuperGlobais PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <pre>
                <?php
                    setcookie("dia-da-semana", "Quarta", time() + 3600);

                    $_SESSION["teste"] = "Funcionou!";

                    echo"<h1>SuperGlobal GET </h1>";
                    var_dump($_GET); //query string

                    echo"<h1>SuperGlobal POST </h1>";
                    var_dump($_POST); 

                    echo"<h1>SuperGlobal REQUEST </h1>";
                    var_dump($_REQUEST);

                    echo"<h1>SuperGlobal COOKIE </h1>";
                    var_dump($_COOKIE);

                    echo"<h1>SuperGlobal FILES</h1>";
                    var_dump($_FILES);

                    echo"<h1>SuperGlobal SESSION </h1>";
                    var_dump($_SESSION);

                    echo"<h1>SuperGlobal ENV </h1>";
                    var_dump($_ENV);

                    echo"<h1>SuperGlobal SERVER </h1>";
                    var_dump($_SERVER);

                    echo"<h1>SuperGlobal GLOBALS </h1>";
                    var_dump($GLOBALS);

                ?>
            </pre>
        </main>
    </body>
</html>