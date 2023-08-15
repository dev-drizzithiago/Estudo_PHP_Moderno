<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor/Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $valor = $_GET["numero"] ?? 0;
        $antes = $valor - 1;
        $depois = $valor + 1;
        echo "O antecessor de $valor é $antes </br>";
        echo "O sucessor de $valor é $depois </br>";
    ?>
    <a href="index.html">Voltar</a>
    
</body>
</html>