<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exercicio_002</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p> hoje é dia ". date("D - d/M/Y"). " e a hora atual é ". date("G:i:s T"). "</p>";    
    ?>
</body>
</html>