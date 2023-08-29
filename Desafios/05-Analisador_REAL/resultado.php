<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANALISANDO NÚMERO REAL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>ANALISANDO O NÚMERO...</h1>
    <?php 
        $numero = $_REQUEST["numero"] ?? 0.000;
        echo "<p>Analisando o número $numero informado pelo usuário: </p>";
        $int = (int) $numero;
        $fra = $numero - $int; // subtrai o numero inteiro com o numero fracionado
        echo "<ul><li>A parte interira do número é <strong>" . $int . "</strong></li></ul>";
        echo "<ul><li>A parte fracionada do número é <strong>". number_format($fra, 3, ",", "") ."</strong></ul></li>";
    ?>
        </br>
        <a href="index.html">Voltar</a>
        
</main>   
</body>
</html>