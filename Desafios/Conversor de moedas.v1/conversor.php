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
            $valor_real = (float) $_GET["moeda"] ?? '0';            
            $valor_usa = $valor_real / 4.86;            
            echo "<p> O valor de R$ $valor_real em U$". number_format($valor_usa, 2, ',', ''). "</p>";       
        ?>
        </br>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
        
         
</main>
</body>
</html>