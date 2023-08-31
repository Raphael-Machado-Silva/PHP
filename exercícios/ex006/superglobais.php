<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                session_start(); //para usar e mostrar a variavel SESSION
                $_SESSION["teste"] = "FUNCIONOU";

            echo "<H1>Superglobal SESSION</H1>"; //manter variáveis ao transitar entre páginas
                 var_dump($_SESSION);
            
            echo "<H1>Superglobal ENV</H1>"; //Superglobal de ambiente
                foreach(getenv() as $c => $v){
                echo "<br>$c - $v ";}

            echo "<H1>Superglobal SERVER</H1>"; //é um array contendo informação como headers, caminhos, e outras informações do script
                var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>
</html>