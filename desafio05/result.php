<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
        $value = $_REQUEST["value"];
        $decimal = $value - intval($value);

            if($value == "" || $value == 0){
                echo "Insira um valor real na página anterior!";
            } else if ($decimal >= 0.999){
                echo "O valor inteiro inserido é: ".intval($value). ".<br>";
                echo "Já o valor decimal deste número é: 0.999.";
            } else{
                echo "O valor inteiro inserido é: ".intval($value). ".<br>";
                echo "Já o valor decimal deste número é: " . number_format($decimal,3 ). ".";
            }
        ?>

        <button><a href="index.html" style="color: white;">Voltar</a></button>
    </main>
</body>
</html>
