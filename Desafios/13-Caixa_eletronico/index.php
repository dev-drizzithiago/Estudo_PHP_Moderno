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
    $_100 = 5;
    $_50 = 2;
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
    </main>
</body>
</html>