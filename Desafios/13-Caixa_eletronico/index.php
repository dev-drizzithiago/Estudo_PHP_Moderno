<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 100px;
            border: 1px 1px 1px black;
        }

    </style>
</head>
    <?php    
        // Valor do saque
        $_valor_saque = $_REQUEST["moeda"] ?? 0.00;
        $_sobra = (int) $_valor_saque;

        //saque 200
       // $_valor_200 = (int) ($_sobra / 200);
       // $_sobra %= 200;

        //saque 100
        $_valor_100 = (int) ($_sobra / 100);
        $_sobra %= 100;

        //saque 50
        $_valor_50 = (int) ($_sobra / 50);
        $_sobra %= 50;

        //saque 20
        $_valor_20 = (int) ($_sobra / 20);
        $_sobra %= 20;

        //saque 10
        $_valor_10 = (int) ($_sobra / 10);
        $_sobra %= 10;

        //saque 5
        $_valor_5 = (int) ($_sobra / 5);
        $_sobra %= 5;
    ?>
<body>
    <main>
    <h1 align="center">Caixa eletronico</h1>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="caixa">Qual valor deseja sacar? (R$)</label>
        <p>* Notas disponiveis: R$200, R$100, R$50, R$20, R$10</p>
        <input type="number" name="moeda" id="moeda" min="5" step="5" value="<?=$_valor_saque?>">
        <input type="submit" value="Sacar">
    </form>
    <h2 align="center">Saque de R$<?=$_valor_saque?> realizado</h2>
    <p>O caixa eletronica vai te entregar as seguintes notas:</p>
        <!--ul>
            <li>R$ 200,00</li> 
            <li>R$ 100,00</li> <?="x = ".$_valor_100?>
            <li>R$ 50,00</li> <?="x = ".$_valor_50?>
            <li>R$ 20,00</li> <?="x = ".$_valor_20?>
            <li>R$ 10,00</li> <?="x = ".$_valor_10?>
            <li>R$ 5,00</li> <?="x = ".$_valor_5?>
        </ul-->
        <ul type="disc">
            <li><img src="./img/_100_reais" alt="Nota de 100" class="nota"> x<?=$_valor_100?></li>
            <li><img src="./img/_50_reais" alt="Nota de 50" class="nota"> x<?=$_valor_50?></li>
            <li><img src="./img/_20_reais" alt="Nota de 20" class="nota"> x<?=$_valor_20?></li>
            <li><img src="./img/_10_reais" alt="Nota de 10" class="nota"> x<?=$_valor_10?></li>
            <li><img src="./img/_5_reais" alt="Nota de 5" class="nota"> x<?=$_valor_5?></li>
        </ul>>    
    </main>
</body>
</html>

