<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORME SALÁRIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_REQUEST["salario"] ?? 0.00;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);        
        $salario_minimo = $salario / 1380.00;
        $_salario_int = (int) $salario_minimo;  
        $_sobra_salario = $salario - 1380.00;
    ?>
    <main>
        <form action="" method="$_POST">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <label for="min">Considerando salário minimo de R$1.380,00</label>
            <input type="submit" value="Calcular">            
        </form>
        <section>
            <label for="resp">Resultado final...</label></br>
            <?="Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL"). ",</br> ganha ". $_salario_int. " minimos + $_sobra_salario"?>
        </section>
    </main>    
</body>
</html>