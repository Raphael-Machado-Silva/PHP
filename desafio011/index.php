<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste de Preços</title>
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco']??0;
        $reajust = $_REQUEST['reajust']??0;
    ?>
    <main>
        <h1 style="text-align: center;">Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idpreco" min="0.1" step="0.01" value=" " required>

            <label for="reajust">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajust" id="idreajust" min="0%" max="100%" value="50%" step="0.1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Resultado do Reajuste</h2>
        <?php 
        if($preco == 0){
            echo "Insira um valor positivo acima!";
        } else{
            $aumento = ($preco * $reajust)/100 + $preco;
            echo "O produto que custava R$". number_format($preco,2). ", com ". $reajust. "% de aumento vai passar a custar R$". number_format($aumento,2). " a partir de agora.";
        }

        ?>
    </article>
    <script>
        mudaValor(); //
        function mudaValor(){
            p.innerText = idreajust.value;
        }
    </script>
</body>
</html>