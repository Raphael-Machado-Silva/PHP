<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["nome"] ?? "NOME"; //para pegar do html usa-se o NAME do objeto, esses ?? serve para caso ele não achar um valor ele substitui por isso
            $sname = $_GET["sobrenome"] ?? "DESCONHECIDO";
            echo "<p>É um prazer te conhecer, $n $s! Este é o meu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p> <!--script para voltar para uma página anterior-->
    </main>
</body>
</html>