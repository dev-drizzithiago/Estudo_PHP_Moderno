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
        $dividendo = $_REQUEST["num_1"] ?? 1;
        $divisor = $_REQUEST["num_2"] ?? 1;
        $resultado = $dividendo / $divisor;
            
    ?>
    <main>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="num_1" id="num_1"  value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="num_2" id="num_2"  value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    <section>    
        <h1>O resultado da divisão</br><?="<p>$resultado</p>"?></h1>
    </section>
    </main>
</body>
</html>