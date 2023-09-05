<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
    //notas disponiveis
    $_200 = 200;
    $_100 = 100;
    $_50 = 50;
    $_20 = 20;
    $_10 = 10;
    $_5 = 5;
    // Valor do saque
    $_valor_saque = $_REQUEST["moeda"] ?? 0.00;
?>
<body>
    <main>
    <h1 align="center">Caixa eletronico</h1>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="caixa">Qual valor deseja sacar? (R$)</label>
        <input type="number" name="moeda" id="moeda">
        <input type="submit" value="Sacar">
    </form>
    <h2 align="center">Saque de R$<?=$_valor_saque?> realizado</h2>
    <p>O caixa eletronica vai te entregar as seguintes notas:</p>
        <ul>
            <li>R$ 5,00</li> <?=?>
            <li>R$ 10,00</li> <?=?>
            <li>R$ 20,00</li> <?=?>
            <li>R$ 50,00</li> <?=?>
            <li>R$ 100,00</li> <?=?>
            <li>R$ 200,00</li> <?=?>
        </ul>        
    </main>
</body>
</html>

<!--<ol type="disc">
            <li><a href="./img/_5_reais.jpg"></a></li>
            <li><a href="./img/_10reais.jpg"></a></li>
            <li><a href="./img/_20_reais.jpg"></a></li>
            <li><a href="./img/_50_reais.jpg"></a></li>
            <li><a href="./img/_100_reais.jpg"></a></li>
            <li><a href="./img/_200_reais.jpg"></a></li>
        </ol>-->