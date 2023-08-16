<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <?php 
        $num = 300;
        echo "O valor da variável é $num.";

        $num_two = 0x1A; //bases numéricas -> 0x = hexadecimal, 0b = binário , 0 = Octal
        echo "O valor da variável é $num_two.";

        $v = 250; //mostrar o tipo primitivo de uma variável e a despejar na tela
        var_dump($v);

        $forçar = (int)"90"; //forçando a mudar o tipo primitivo de uma variável
        var_dump($forçar);

        $arrow = [6, 2.5, "maria"]; //vetor em PHP e mostrando seu tipo primitivo que depende de cada valor
        var_dump($arrow);

        class Pessoa{
            private string $password;
        }

        $p = new Pessoa();
        var_dump($p)
    ?>
    
</body>
</html>