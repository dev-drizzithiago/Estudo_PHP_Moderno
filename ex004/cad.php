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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"<desconhecido>";
            $sobrenome = isset($_GET["sobrenome"])?$_GET["sobrenome"]:"<desconhecido>";
            echo "É um prazer te conhecer $nome $sobrenome";
            var_dump($_GET);
        ?>
        </p>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>    
</body>
</html>