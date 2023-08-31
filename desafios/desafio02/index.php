<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteio de Números</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
        
            $min = 0; 
            $max = 100;
        $num = random_int($min, $max);
        echo "O número gerado é: <strong>$num</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
    
</body>
</html>
