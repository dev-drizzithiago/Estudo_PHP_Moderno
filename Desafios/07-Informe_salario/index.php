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
        $salario_minimo = 1380.00
    ?>
    <main>
        <form action="" method="$_POST">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <label for="min">Considerando salário minimo de R$1.380,00</label>
            <input type="submit" value="Calcular">            
        </form>
        <section>
            <label for="resp">Resultado final...</label>
            <?="<p>Considerando que quem recebe o salário de </p>". numfmt_format_currency($padrao, $salario, "BRL"). "Você recebe ". $ ?>
        </section>
    </main>    
</body>
</html>