<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORME SALÁRIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="" method="$_POST">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <label for="min">Considerando salário minimo de R$1.380,00</label>
            <input type="submit" value="Calcular">            
        </form>
        <section>
            <label for="resp">Resultado final...</label>
            <?="<p>Você que recebe o salário de</p>". ?>
        </section>
    </main>    
</body>
</html>