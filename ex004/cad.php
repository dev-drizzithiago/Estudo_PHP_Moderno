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
        <?php 
            $nome = $_GET["nome"] ?? "desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer $nome $sobrenome</p>";
            //var_dump($_GET);
        ?>        
    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>    
</body>
</html>