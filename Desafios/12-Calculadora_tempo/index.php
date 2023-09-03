<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_segundos = $_REQUEST["secund"] ?? 0;
        $_calc_semanas = $_segundos / 10080;
        $_calc_dias = $_segundos / 1440;
        $_calc_horas = $_segundos / 3600;
        $_calc_minutos = $_segundos / 60;
        $_calc_segundos = $_segundos;        
    ?>
    <main>
        <h1>Caculadora de Tempo</h1>
        <form action="" method="get">
            <label for="seg">Quantos segundos quer calcular?</label>
            <input type="number" name="secund" id="secund" value="<?=$_segundos?>">
            <input type="submit" value="Calcular">
        </form>
        <h1>Totalizando tudo...</h1>
        <p>Analisando o valor que você digitou, <?=$_segundos?> segundos equivalem a um total de:</p>
        <ul>
            <li><?=number_format($_calc_semanas, 0, ",", ".")?> semanas </li>
            <li><?=number_format($_calc_dias, 0, ",", ".")?> dias </li>
            <li><?=number_format($_calc_horas, 0, ",", ".")?> horas </li>
            <li><?=number_format($_calc_minutos,0 , ",", ".")?> minutos</li>
            <li><?=number_format($_calc_segundos, 0, ",", ".")?> segundos </li>
        </ul>
    </main>
</body>
</html>