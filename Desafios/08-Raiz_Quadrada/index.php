<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Raiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Media simples é quando os dois pontos se encontram no meio, ex: 10 e 20, o meio passa a ser 14-->
    <!--Media ponderada é quando os dois pontos se encontram, mas não exatamente no meio, depende do pesa de cada pontos, ex:
o ponto "A" esta no ponto 6 e o ponto "B" esta no ponto 21, o ponto "A" possui peso 2 e o ponto "B" possui peso 1, quando o ponto "A" puxa 2 números, enquanto o ponto "B" puxa apenas 1 número, os dois se encontraram quando o número for 11-->
    <!--Basta usar esse código e usar esses resultados para tirar a prova-->
    <?php 
        $valor_raiz = $_REQUEST["_raiz_"] ?? 0;
        $raiz_x_2 = $valor_raiz ** (1/2);
        $raiz_x_3 = $valor_raiz ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get">
        <label for="_raiz">Número </label>
        <input type="number" name="_raiz_" id="_raiz_" require value="<?=$valor_raiz?>">
        <input type="submit" value="Calcular RAÍZE">
    </form>
        <h1>Resultado final</h1>
        <p>Analisando o <strong> número "<?=$valor_raiz?></strong>" temos:</p>
        <?="<p>A sua raiz <strong>QUADRADA</strong> é <i>". number_format($raiz_x_2, 3). "</i></p>"?>
        <?="<p>A sua raiz <strong>CÚBICA</strong> é <i>". number_format($raiz_x_3, 3). "</i></p>"?>
    </main> 
</body>
</html>