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
        $num= $_REQUEST['num'] ?? 0; //pegar o valor do input do index.html

        if($num>0){
            $antecessor= $num -1;
            $sucessor= $num +1;
        echo "O número escolhido foi $num";
        echo "<br>Seu sucessor é $sucessor.";
        echo "<br>Seu antecessor é $antecessor.";
        } else if($num ==""){
            echo "Digite um número na página anterior!";
        } else{
            $negative_antecessor= $num +1;
            $negative_sucessor= $num -1;        
        echo "O número escolhido foi $num";
        echo "<br>Seu sucessor é $negative_sucessor.";
        echo "<br>Seu antecessor é $negative_antecessor.";
        }
        ?>
        <button><a href="index.html">&#x2B05; Voltar</a></button>
    </main>
    
</body>
</html>