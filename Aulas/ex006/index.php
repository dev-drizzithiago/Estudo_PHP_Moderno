<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $v1 = $_POST["v1"] ?? 0;
            $v2 = $_POST["v2"] ?? 0;
            $soma = $v1 + $v2;
        ?>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1", id="v1" value="<?=$v1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
        <section>
            <h1>O resultado da soma </br> <?="<p> $soma </p>";?> </h1>        
        </section>
    </main>
</body>
</html>