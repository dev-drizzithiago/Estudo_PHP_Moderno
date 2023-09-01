<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritmédica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_REQUEST["_1_valor_"] ?? 1;
        $p1 = $_REQUEST["_1_peso_"] ?? 1;
        $v2 = $_REQUEST["_2_valor_"] ?? 1;
        $p2 = $_REQUEST["_2_peso_"] ?? 1;
        $_simples = ($v1 + $v2) / 2;
        $_produto_pondeirada_v1 = ($v1*$p1);
        $_produto_pondeirada_v2 = ($v2*$p2);
        $_soma_peso = $p1 + $p2;
        $_valor_pondeirada = ($_produto_pondeirada_v1 + $_produto_pondeirada_v2) / $_soma_peso;
    ?>
    <main>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="_1_valor">1º Valor</label>
        <input type="number" name="_1_valor_" id="_1_valor_" value="<?=$v1?>">
        <label for="_1_peso">1º Peso</label>
        <input type="number" name="_1_peso_" id="_1_penso_" value="<?=$p1?>">
        <label for="number">2º Valor</label>
        <input type="number" name="_2_valor_" id="_2_valor_" value="<?=$v2?>">
        <label for="_2_peso">2º Peso</label>
        <input type="number" name="_2_peso_" id="_2_peso_" value="<?=$p2?>">
        <input type="submit" value="Calcular Média">
    </form>
    <h1>Calculo das médias</h1>
    <p>analisando os valores <?=$v1 ." e ". $v2?></p>
    <p><?= "A média <strong><i> Aritmética Simples </strong></i> entre os valores é igual a ". number_format($_simples, 2)?></p>
    <p><?= "A Média <strong><i> Aritmética Pondeirada </strong></i> com os pesos $p1 e $p2 é igual a ". number_format($_valor_pondeirada, 2)?></p>
    </main>
</body>
</html>