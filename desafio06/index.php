<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da Divisão</title>
</head>
<body>  
    <?php 
        $value1 = $_REQUEST['value1'] ?? 0;
        $value2 = $_REQUEST['value2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="value1">Dividendo:</label>
                <input type="number" name="value1" id="idvalue1" value="<?php echo $value1;?>" step="any">
                <label for="value2">Divisor:</label>
                <input type="number" name="value2" id="idvalue2" value="<?php echo $value2;?>" step="any">
                <input type="submit" value="Calcular">
            </form>
    </main>
    
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
    /*  _____________RASCUNHO______________
        $dividendo = 200;
        $divisor = 20;
        echo intdiv(200, 20);
        echo  100%7; */

        if ($value1  == 0 || $value2 ==0){
            echo "Insira um valor aceitável acima!!";
        } else{
            $resto = $value1%$value2;
            $quociente = intdiv($value1, $value2);
                echo "O dividendo é: " . $value1 . ".<br>";
                echo "O divisor é: " . $value2 . ".<br>";
                echo "O resto é: " . $resto . ".<br>";
                echo "O quociente é: " . $quociente . ".<br>";
        }
        ?>
    </section>
</body>
</html>