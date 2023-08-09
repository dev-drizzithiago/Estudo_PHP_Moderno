<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <p>
        <?php 
            $nome = assert($_GET["nome"])?$_GET["nome"]:"<desconhecido>";
            $sobrenome = assert($_GET["sobrenome"])?$_GET["sobrenome"]:"<desconhecido>";
            echo "$nome $sobrenome"
        ?>
        </p>
    </main>
    <a href="./index.html">Voltar</a>    
</body>
</html>