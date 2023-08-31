<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <main>
        <h1 style="text-align: center;">Resultado Final</h1>
        <pre>
            <?php 

    $inicio = date("m-d-Y", strtotime("-7 days")) ; // o dia de hoje - 7dias
    $fim = date("m-d-Y") ; //dia de hoje


    // a substituição faz rodar a cotação da data atual
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), TRUE); //pegar os arquivos que estao em json da url acima, e o TRUE faz com que essas informações estejam dentro de um array e nao um objeto

    //pegando a cotação do array gerado a partir da url
    $cotacao = $dados["value"][0]["cotacaoCompra"];

    echo "O valor da cotação é: " . number_format($cotacao, 2) . ".";
            ?>
        </pre>
    <button><a href="index.html">&#x2B05; Voltar</a></button>
    </main>
    
</body>
</html>