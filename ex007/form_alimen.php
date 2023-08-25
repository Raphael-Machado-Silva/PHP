<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Retroalimentado</title>
</head>
<body>
    <main>   <!--Método de chamar no action a própria página-->
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
             <label for="v1">Valor 1:</label>
             <input type="number" name="v1" id="v1">
             <label for="v2">Valor 2:</label>
             <input type="number" name="v2" id="v2">
             <input type="submit" value="Somar">
        </form>
    </main>
</body>
</html>