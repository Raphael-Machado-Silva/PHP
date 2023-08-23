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
        /* ------------MEU JEITO DE FAZER-----------
        $valor= $_REQUEST['valor'];
        $dolar = $valor / 4.86;

        if(empty($valor) || $valor == 0){
            echo "Por favor volte para a página anterior e insira um valor!!";
        } else{        
            echo "Os seus $valor equivalem a: <br>";
            echo "Você possui U$ " . number_format($dolar,2) . ".";}
*/

        $cotacao = 4.86;
        $real = $_REQUEST['valor'];
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "<p> Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . ".</p>";
        ?>
    <button><a href="index.html">&#x2B05; Voltar</a></button>
    </main>
    
</body>
</html>