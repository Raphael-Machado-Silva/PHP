<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número</title>
</head>
<body>
    <main>
        <h1>Resultado Final:</h1>
        <?php 
        $num= $_REQUEST['num'] ?? 0;

        $antecessor= $num -1;
        $sucessor= $num +1;

        echo "O número escolhido foi $num";
        echo "<br>Seu sucessor é $sucessor.";
        echo "<br>Seu antecessor é $antecessor.";
        ?>
    </main>
    
</body>
</html>