<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da DIVISÃO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_SERVER["num_1"] ?? 1;
        $divisor = $_SERVER["num_2"] ?? 1;        
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="num_1" id="num_1" require value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="num_2" id="num_2" require value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    <?php 
        $resultado = $dividendo / $divisor;
        echo "O resultado da divisão é $resultado";
    ?>
    </main>
</body>
</html>