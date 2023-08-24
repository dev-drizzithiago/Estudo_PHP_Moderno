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
        <form action="index.html" class="voltar">
            <p><input type="submit" value="Voltar" idbotao></p>
        </form>
        <a href="https://www.google.com/finance/quote/USD-BRL?sa=X&ved=2ahUKEwjW65Sr9vOAAxVEq5UCHdzDBGUQmY0JegQIBhAr" target="_self">
            <p><input type="submit" value="Fonte"></p>
        </a>
        
</body>
</html>