<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
         $salario = $_REQUEST['salario'] ?? 0;
    ?>
    <main>
        <h1 style="text-align: center;">Informe seu Salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="idsalario" step="0.01"  value="<?php echo $salario;?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.320,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2 style="text-align: center;">Resultado Final</h2>
        <?php 
            $resto = $salario%1320;
            $quociente =  intdiv($salario,  1320);
            if($salario == 0){
                echo "Quem recebe um salário de R$0,00 ganha <strong>0 salários mínimos</strong> + R$ 0,00.";
                echo "<br> Insira um salário acima.";
            } else {
                echo "  Quem recebe um salário de R$" . number_format($salario, 2, ",", ".") . " ganha ". $quociente. " salários mínimos + R$ ".number_format($resto, 2, ",", ".") . ".";
            }
        ?>
    </section>
</body>
</html>