<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <?php 
        $valor = $_REQUEST['valor']??0;
    ?>
    <main>
        <h1 style="text-align: center;">Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor" required value="<?php echo $valor;?>" min="1" step="1.0">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Saque de R$ <?php echo number_format($valor, 2)?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
    <?php 
            $cem_reais= intdiv($valor,100);
            $cem_resto=$valor%100;

            $cinquenta_reais= intdiv($cem_resto, 50);
            $cinquenta_resto=$cem_resto%50;

            $vinte_reais= intdiv($cinquenta_resto, 20);
            $vinte_resto=$cinquenta_resto%20;

            $dez_reais= intdiv($vinte_resto, 10);
            $dez_resto=$vinte_resto%10;

            $cinco_reais= intdiv($dez_resto, 5);
            $cinco_resto=$dez_resto%5;

            $dois_reais= intdiv($cinco_resto, 2);
            $dois_resto=$cinco_resto%2;

            $um_real= $dois_resto;
            
    ?>
        <li><img src="./imgs/100-reais.jpg" alt="" width="150px">x<?php echo $cem_reais;?></li>
        <li><img src="./imgs/50-reais.jpg" alt="" width="150px">x<?php echo $cinquenta_reais;?></li>
        <li><img src="./imgs/20-reais.jpg" alt="" width="150px">x<?php echo $vinte_reais;?></li>
        <li><img src="./imgs/10-reais.jpg" alt="" width="150px">x<?php echo $dez_reais;?></li>
        <li><img src="./imgs/5-reais.jpg" alt="" width="150px">x<?php echo $cinco_reais;?></li>
        <li><img src="./imgs/2-reais.jpg" alt="" width="150px">x<?php echo $dois_reais;?></li>
        <li><img src="./imgs/1-real.jpg" alt="" width="80px">x<?php echo $um_real;?></li>
        </ul>
    </article>
</body>
</html>