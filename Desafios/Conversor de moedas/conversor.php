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
            echo "O valor de R$ $valor_real em U$ $valor_usa";
       ?>
</body>
</html>