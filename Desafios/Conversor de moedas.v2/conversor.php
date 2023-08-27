<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas V2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <?php
        // Pega o valor digitado pelo usuário, direto do formulario.
        $valor_moeda = $_REQUEST["moeda"] ?? 0.00;

        // Busca a cotação do banco central
        $data_inicio = date("m-d-Y", strtotime("-7 days"));
        $data_final = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$data_inicio.'\'&@dataFinalCotacao=\''.$data_final.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        //var_dump($dados);
        $cotacao = $dados["value"][0]['cotacaoCompra'];
        echo "O valor da cotação do dia é R$". number_format($cotacao, 2, ",", "."). "</br>";

        //Biblioteco internallizarions PHP
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        $valor_do_dolar = $valor_moeda / $cotacao;
        echo "O valor de ". numfmt_format_currency($padrao, $valor_moeda, "BRL"). " em U$ é de: ". numfmt_format_currency($padrao, $valor_do_dolar, "USD");
    ?>    
</main>
</br>
<a href="index.html" class="voltar">Voltar!</a>
</body>
</html>