<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritimédica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_REQUEST["_1_valor_"] ?? 0;
        $p1 = $_REQUEST["_1_peso_"] ?? 0;
        $v2 = $_REQUEST["_2_valor_"] ?? 0;
        $p2 = $_REQUEST["_2_peso_"] ?? 0;
        $_simples = 2 / ($v1 + $v2);
        $_pondeirada = 
    ?>
    <main>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="_1_valor">1º Valor</label>
        <input type="number" name="_1_valor_" id="_1_valor_">
        <label for="_1_peso">1º Peso</label>
        <input type="number" name="_1_peso_" id="_1_penso_">
        <label for="number">2º Valor</label>
        <input type="number" name="_2_valor_" id="_2_valor_">
        <label for="_2_peso">2º Peso</label>
        <input type="number" name="_2_peso_" id="_2_peso_">
        <input type="submit" value="Calcular Média">
    </form>    
    </main>
</body>
</html>