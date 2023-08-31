<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Simples e Ponderada</title>
</head>
<body>
    <?php 
    $n1 = $_REQUEST['n1']??0;
    $n2 = $_REQUEST['n2']??0;
    $p1 = $_REQUEST['p1']??1;
    $p2 = $_REQUEST['p2']??1;
    ?>
    <main>
        <h1 style="text-align: center;">Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">1º Valor</label>
            <input type="number" name="n1" id="idn1" value="<?php echo $n1; ?>" step="any" min="1" required>

            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="idp1" value="<?php echo $p1; ?>" step="any" min="1" required>

            <label for="n2">2º Valor</label>
            <input type="number" name="n2" id="idn2" value="<?php echo $n2; ?>" step="any" min="1" required>

            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="idp2" value="<?php echo $p2; ?>" step="any" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Cálculo das Médias</h2>
        <?php 
        $simples = ($n1 + $n2)/2;
        $ponderada = ($p1 * $n1 + $n2 * $p2)/ ($p1 + $p2);
        echo "Analisando os valores de " . $n1. " e ". $n2. ".";
        echo "<ul> <li> A <strong>Média Aritmética Simples</strong> é: ".$simples. ".";
        echo "<li> A <strong>Média Aritmética Ponderada</strong> é: ".number_format($ponderada, 3). ".";
        ?>
    </article>
    
</body>
</html>