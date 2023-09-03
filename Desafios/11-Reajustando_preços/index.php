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
        $_valor_percentagem = $_REQUEST["porcentagem"] ?? 0;
    
    ?>
    <main>
        <form action="" method="get">
        <label for="preco">Preço do produto(R$)</label>
        <input type="number" name="preco" id="preco">
        <label for="porcentual">Qual será o percentual de rajuste?</label>
        <input type="number" name="porcentagem" id="porcentagem">
        </form>
    </main>    
</body>
</html>