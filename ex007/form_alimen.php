<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Retroalimentado</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1 style="text-align: center;">Somador de Valores</h1>   

                <!--Método de chamar no action a própria página-->
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

             <label for="v1">Valor 1:</label>
             <input type="number" name="v1" id="v1" value="<?php echo $valor1; ?>">
             <!-- Esse VALUE é para os imputs nao ficarem em branco ao clicar no button -->
             <label for="v2">Valor 2:</label>
             <input type="number" name="v2" id="v2" value="<?php echo $valor2 ?>">

             <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma:</h2>
        <?php 
        $soma = $valor1 + $valor2;
            if($soma == 0 || $soma == null){
            
            } else{          
            echo "O valor da soma é: " . "<strong>$soma</strong>". ".";
            }

        ?>
    </section>
</body>
</html>