<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Regra de Três</title>
</head>
<body>
<?php 
        $value_a = $_REQUEST['value_a']??0;
        $value_x = $_REQUEST['value_x']??0;
    ?>
    <div class="container">
        <h1>Regra de Três</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <div class="calculator_sup">
                <input type="number" name="value_a" id="value_a"> 
                <p> está para </p> 
                <input type="number" name="value_b" id="value_b">
            </div>
            <div class="calculator_middle">
                <p>Assim como</p>
            </div>
            <div class="calculator_bottom">
                <input type="number" name="value_c" id="value_c"> 
                <p> está para </p> 
                <input type="number" name="value_x" id="value_x" value="<?php echo $value_x;?>">
            </div>
            <div class="submit">
                <input type="submit" value="Calcular">
            </div>
        </form>
    </div>
    <?php ?>
</body>
</html>