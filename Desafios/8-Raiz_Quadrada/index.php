<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Raiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor_raiz = (int) $_REQUEST["_raiz_"] ?? 0;
        $raiz_x_2 = $valor_raiz ** (1/2);
        $raiz_x_3 = $valor_raiz ** (1/3);
    ?>
    <main>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get">
        <label for="_raiz">Número </label>
        <input type="number" name="_raiz_" id="_raiz_" require value="<?=$valor_raiz?>">
        <input type="submit" value="Calcular RAÍZE">
    </form>
        <h1>Analisando o número <?=$valor_raiz?></h1>
        <?="<p>A sua raiz <strong>QUADRADA</strong> é <i>". number_format($raiz_x_2, 3). "</i></p>"?>
        <?="<p>A sua raiz <strong>CÚBICA</strong> é <i>". number_format($raiz_x_3, 3). "</i></p>"?>
    </main> 
</body>
</html>