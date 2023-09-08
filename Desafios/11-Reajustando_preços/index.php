<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustando Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_valor_preco = $_GET["preco"] ?? 1;
        $_valor_percentagem = $_GET["reaj"] ?? 50;
        $_valor_reajuste = $_valor_preco + ($_valor_preco * $_valor_percentagem / 100);
    ?>
    <main>
        <form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="get">
        <label for="preco">Preço do produto(R$)</label>
        <input type="number" name="preco" id="preco" step="0.01" value="<?=$_valor_preco?>">
        <label for='reaj'>Qual será o percentual de rajuste?(<strong><span id="porc">?</span>%</strong>)</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()">
        <input type="submit" value="Reajustar">
        </form>
        <h1>Resultado do Reajuste!</h1>
    <?php 
        // Depois vou colocar botão de radio para poder escolher se quer dar desconto ou aumentar o valor
        echo "O produto custava R$<strong>". number_format($_valor_preco, 2, ",", "."). "</strong>, com <i><strong>$_valor_percentagem%</strong></i> de aumento vai passar a custar R$<strong>". number_format($_valor_reajuste, 2, ",", "."). "</strong> a partir de agora.";       
    ?>
    </main>
    <script>
         mudaValor();
        function mudaValor() {
            porc.innerText = reaj.value;
        }
    </script>
</body>
</html>