<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando Idade</title>
</head>
<body>        
    <?php 
        $atual = date("Y");
        $ano = $_REQUEST['ano'] ?? 0;
        $escolha_ano = $_REQUEST['escolha_ano']??$atual;
    ?>
    <main>
        <h1 style="text-align: center;">Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="idano" min="1" required>
            <label for="escolha_ano">Quer saber sua idade em que ano? (atualmente estamos em <?php echo "<strong>$atual</strong>";?>)</label>
            <input type="number" name="escolha_ano" id="id_escolha_ano" value="<?php echo $atual;?>" min="1" required>

            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Resultado</h2>
        <?php 
        $result = $atual - $ano;
        if($result==$atual){
            echo "Insira dados acima para calcular!";
        } else{
            echo "Quem nasceu em ". $ano. " vai ter ". $result . " anos em ". $atual. "."; 
        }

        ?>
    </article>
</body>
</html>












