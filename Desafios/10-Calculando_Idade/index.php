<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_ano_nasc = $_REQUEST["ano_nasc"] ?? 1900;
        $_ano_atual = $_REQUEST["ano_atual"] ?? 2023;
        $_calc_idade = $_ano_atual - $_ano_nasc;           
    ?>
    <main>
        <h1>Calculando a sua idade!</h1>
        <form action="" method="$_GET">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano">
            <label for="ano_atual">Quer saber sua idade em qual ano? (Estamos em 2023)</label>
            <input type="number" name="ano_atual" id="ano_atual">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    
    <h1>Resultado!</h1>
    <?php 
        echo "<p>Quem nasceu no ano de $_ano_nasc vai ter $_calc_idade em $_ano_atual</p>";
    ?>
    </main>    
</body>
</html>