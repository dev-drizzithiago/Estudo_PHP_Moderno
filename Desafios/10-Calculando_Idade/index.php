<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $_ano_atual_sistema = date("Y");
        $_ano_nasc = $_GET["ano_nasc"] ?? 1982;
        $_ano_atual = $_GET["ano_atual"] ?? $_ano_atual_sistema;
        $_calc_idade = $_ano_atual - $_ano_nasc;           
    ?>
    <main>
        <h1>Calculando a sua idade!</h1>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="$_GET">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" max="<?=$_ano_atual?>"value="<?=$_ano_nasc?>">
            <label for="ano_atual">Quer saber sua idade em qual ano? (Estamos em 2023)</label>
            <input type="number" name="ano_atual" id="ano_atual" value="<?=$_ano_atual_sistema?>">
            <input type="submit" value="Qual sera minha idade?">
        </form>    
    <?php
        echo "<h1>Resultado!</h1>";
        echo "<p>Quem nasceu no ano de <strong><i>$_ano_nasc</i></strong> vai ter $_calc_idade em <strong>$_ano_atual</strong></p>";
    ?>
    </main>    
</body>
</html>