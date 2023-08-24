<!DOCTYPE html>
<html leng="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Convertendo Real em Dolar</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
       <?php
            $valor_real = (float) $_GET["moeda"] ?? '0';            
            $valor_usa = $valor_real / 4.86;            
            echo "<p> O valor de R$ $valor_real em U$". number_format($valor_usa, 2, ',', ''). "</p>";       
        ?>
        </br>
        <a href="index.html" id="idbotao">Voltar</a>
        <a href="https://www.google.com/finance/quote/USD-BRL?sa=X&ved=2ahUKEwjW65Sr9vOAAxVEq5UCHdzDBGUQmY0JegQIBhAr" target="self">Fonte</a>
</body>
</html>