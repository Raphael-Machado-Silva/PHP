<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número</title>
</head>
<body>
    <main>
        <h1>O seu sucessor e antecessor é:</h1>
        <?php 
        $num= $_REQUEST['num'];

        $antecessor= $num -1;
        $sucessor= $num +1;

        echo "O número escolhido foi $num";
        echo "Seu sucessor é $sucessor.";
        echo "Seu antecessor é $antecessor.";
        ?>
    </main>
    
</body>
</html>