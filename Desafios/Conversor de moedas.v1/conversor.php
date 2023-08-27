<!DOCTYPE html>
<html leng="pt-br">
<head>
    <meta charset="utf-8">
    <title>Convertendo Real em Dolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
        <h1> Convertendo REAL EM DOLAR </h1>
        <?php
            $valor_real = $_GET["moeda"] ?? 0;
            $valor_base = $_REQUEST["base"] ?? 0;
            $valor_usa = $valor_real / $valor_base;            
            echo "<p class='eco'> O valor de R$ ". number_format($valor_real, 2, ",", "."). "em U$". number_format($valor_usa, 2, ',', '.'). "</p>";
        ?>
        </br>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
        <a href="https://www.google.com/finance/quote/USD-BRL?sa=X&ved=2ahUKEwjW65Sr9vOAAxVEq5UCHdzDBGUQmY0JegQIBhAr" target="_blank">FONTE</a>       
</main>
</body>
</html>