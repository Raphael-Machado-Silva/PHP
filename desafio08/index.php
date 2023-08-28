<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informe um Número</title>
</head>
<body>
    <?php 
        $num = $_REQUEST['num'] ?? 0 ;
    ?>
    <main>
        <h1 style="text-align: center;">Informe um  Número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número:</label>
            <input type="number" name="num" id="idnum" value="<?php echo $num ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <article>
        <h2 style="text-align: center;">Resultado Final</h2>
        <?php 
        $cubica = pow($num, 1/3);
        $quadrada = sqrt($num);
        echo "Analisando o <strong> número " . $num . "</strong>, temos:";
        echo "<ul> <li>A sua raiz quadrada é ". "<strong>". number_format($quadrada, 2) . "</strong>;";
        echo "<li>A sua raiz cúbica é "."<strong>".number_format($cubica,2 )."</strong>; </ul>";
        ?>
    </article>
</body>
</html>