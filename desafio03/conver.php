<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <main>
        <h1 style="text-align: center;">Resultado Final</h1>
        <?php 
        $valor= $_REQUEST['valor'];
        $dolar = $valor / 4.86;

        if($valor == " " || $valor == 0){
            echo "Por favor volte para a página anterior e insira um valor!!";
        } else{        
            echo "Os seus $valor equivalem a: <br>";
            echo "Você possui U$ " . number_format($dolar,2) . ".";}

        ?>
    <button><a href="index.html">&#x2B05; Voltar</a></button>
    </main>
    
</body>
</html>