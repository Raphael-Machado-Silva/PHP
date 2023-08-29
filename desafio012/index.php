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
            <input type="number" name="time" id="idtime" min="1" step="0.01" required value="<?php echo $time;?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Convertendo o Valor</h2>
        <?php 

        if($time==0){
            echo "Insira um valor de segundos acima para efetuar a conversão!";
        } else{
            $semanas = intdiv($time,  604800);
                $resto_semana = $time%604800;
            $dias = intdiv($resto_semana, 86400);
                $resto_dia= $resto_semana%86400;
            $horas =intdiv($resto_dia, 3600);
                $resto_horas = $resto_dia%3600;
            $minutos =intdiv($resto_horas, 60);
                $resto_minutos = $resto_horas%60;
            $segundos = $resto_minutos;   
                echo "<p>Analisando o valor que você digitou <strong>". number_format($time, 2,".", ","). " segundos </strong> equivalem a um total de:</p>";
                echo "<ul> <li> ". $semanas. " semanas;";
                echo " <li> ". $dias. " dias;";
                echo " <li> ". $horas. " horas;";
                echo " <li> ". $minutos. " minutos;";
                echo " <li> ". $segundos. " segundos; </ul>";
        }
        ?>
    </article>
</body>
</html>