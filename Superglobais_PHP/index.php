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
                    setcookie("dia-da-semana", "Terça", time() + 3600);

                    $_SESSION["teste"] = "Funcionou!";

                    echo"<h1>SuperGlobais GET </h1>";
                    var_dump($_GET);

                    echo"<h1>SuperGlobais POST </h1>";
                    var_dump($_POST);

                    echo"<h1>SuperGlobais REQUEST </h1>";
                    var_dump($_REQUEST);

                    echo"<h1>SuperGlobais COOKIE </h1>";
                    var_dump($_COOKIE);

                    echo"<h1>SuperGlobais SESSION </h1>";
                    var_dump($_SESSION);

                    echo"<h1>SuperGlobais ENV </h1>";
                    var_dump($_ENV);

                ?>
            </pre>
        </main>
    </body>
</html>