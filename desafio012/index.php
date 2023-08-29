<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Máquina do Tempo</title>
</head>
<body>
    <?php 
    $time = $_REQUEST['time']??0;
    ?>
    <main>
        <h1 style="text-align: center;">Calculadora do Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="time">Qual é o total de segundos?</label>
            <input type="number" name="time" id="idtime" min="1" step="0.1" required value="<?php echo $time;?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Convertendo o Valor</h2>
        <?php 
        $semanas =0;
        $dias =0;
        $horas =0;
        $minutos =0;
        $segundos =0;
            echo "<p> Analisando o valor que você digitou <strong>". $time. " segundos </strong> equivalem a um total de:</p>";
            echo "<ul> <li> ". $semanas. " semanas;";
            echo " <li> ". $dias. " dias;";
            echo " <li> ". $horas. " horas;";
            echo " <li> ". $minutos. " minutos;";
            echo " <li> ". $segundos. " segundos; </ul>";
        ?>
    </article>
</body>
</html>