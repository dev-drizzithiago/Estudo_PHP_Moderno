<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustando Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_valor_preco = $_GET["preco"] ?? 1;
        $_valor_percentagem = $_GET["_%%"] ?? 50;
        $_valor_reajuste = $_valor_preco + ($_valor_preco * $_valor_percentagem / 100);
    ?>
    <main>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="preco">Preço do produto(R$)</label>
        <input type="number" name="preco" id="preco" value="<?=$_valor_preco?>">
        <?="<label for='porcentual'>Qual será o percentual de rajuste?($_valor_percentagem)</label>"?>
        <input type="range" name="_%%" id="_%%" min="1" max="100" value="<?=$_valor_percentagem?>">        
        <input type="submit" value="Reajustar">
        </form>
    <?php 
        echo "O produto custava R$<strong>". number_format($_valor_preco, 2, ",", "."). "</strong>, com <i><strong>$_valor_percentagem%</strong></i> de aumento vai passar a custar R$<strong>". number_format($_valor_reajuste, 2, ",", "."). "</strong> a partir de agora.";
    ?>
    </main>    
</body>
</html>