<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Caixa eletronico</h1>
    <main>        
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="caixa">Qual valor deseja sacar? (R$)</label>
        <input type="number" name="moeda" id="moeda">
        <input type="submit" value="Sacar">
    </form>
    </main>    
</body>
</html>