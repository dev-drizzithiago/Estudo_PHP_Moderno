<!DOCTYPE html>
<html leng="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Convertendo Real em Dolar</title>
    </head>
<body>
       <?php
            $valor_real = (float) $_GET["moeda"] ?? '0';            
            $valor_usa = $valor_real / 4.86;

            
            echo "<p align='center'> O valor de R$ $valor_real em U$ $valor_usa </p>";       
        ?>
        </br>
        <p align="center"><a href="index.html" id="idbotao">Voltar</a></p>
        <p align="center"><a href="https://www.google.com/finance/quote/USD-BRL?sa=X&ved=2ahUKEwjW65Sr9vOAAxVEq5UCHdzDBGUQmY0JegQIBhAr" target="self">Fonte</a></p>
</body>
</html>