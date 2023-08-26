<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GERADOR DE NÚMEROS ALEATORIOS!!</title>
</head>
<body>
    <main>
    <h1>GERADOR DE NÚMEROS ALEATORIOS!!</h1>
    <?php
        $numero_gerado = rand(0,100);
        echo "<p>Número gerado foi... $numero_gerado </p>";        
    ?>
        <form action="index.html">
         <input type="submit" value="Voltar">
        </form>
    </main>
</body>
</html> 
