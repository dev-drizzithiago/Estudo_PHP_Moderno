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
        $_valor_preco = $_REQUEST["preco"] ?? 0;
        $_valor_percentagem = $_REQUEST["_%%"] ?? 0;    
    ?>
    <main>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="preco">Preço do produto(R$)</label>
        <input type="number" name="preco" id="preco">
        <label for="porcentual">Qual será o percentual de rajuste? <?="($_valor_percentagem)"?></label>
        <input type="range" name="_%%" id="_%%" min="0" max="100">        
        <input type="submit" value="Reajustar">
        <input type="reset" value="Limpar">
        </form>
    </main>    
</body>
</html>