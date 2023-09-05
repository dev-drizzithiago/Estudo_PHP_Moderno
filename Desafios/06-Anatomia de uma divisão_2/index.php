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
        $dividendo = $_REQUEST["num_1"] ?? 0;
        $divisor = $_REQUEST["num_2"] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
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
        <h1>O resultado da divisão</br></h1>
        <?php
            echo "<ul>";
            echo "<li>Dividendo <strong><i>$dividendo</strong></i> </li>";
            echo "<li>Divisor <strong><i>$divisor</strong></i> </li>";
            echo "<li>Quociente <strong><i>$quociente</strong></i> </li>";
            echo "<li>Resto <strong><i>$resto</strong></i></li>";
            echo "</ul>";    
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>        
    </section>
    </main>
</body>
</html>