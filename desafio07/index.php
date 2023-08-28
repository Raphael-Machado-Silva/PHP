<!DOCTYPE html>
<html lang="en">
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
            <input type="number" name="salario" id="idsalario" step="any"  value="<?php echo $salario;?>">
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
                echo "Quem recebe um salário de R$0,00 ganha <strong>0 salários mínmos</strong> + R$ 0,00.";
            } else {
                echo "Quem recebe um salário de R$" . $salario . " ganha ". $quociente. " salários mínimos + R$ ". $resto . ".";
            }
        ?>
    </section>
</body>
</html>