<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORME SALÁRIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);        
        $salario = $_GET["_salario"] ?? 0.00;
        $salario_minimo = $salario / 1380;        
        $_salario_int = (int) $salario_minimo;
        $salario_x_min = $_salario_int * 1380;
        $_sobra_salario = $salario - $salario_x_min;        
    ?>
<body>
    <main>
    <h1 align="center">INFORME SALÁRIO</h1>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="$_GET">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="_salario" id="_salario" step="0.01" value="<?=$salario?>">
            <label for="min">Considerando salário minimo de R$1.380,00</label>
            <input type="submit" value="Calcular">            
        </form>
        <section>
            <h1 align="center">Resultado final...</h1>
            <?="Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL"). " </br> ganha ". $_salario_int. " minimos + ". numfmt_format_currency($padrao, $_sobra_salario, "BRL")?>
        </section>
    </main>    
</body>
</html>