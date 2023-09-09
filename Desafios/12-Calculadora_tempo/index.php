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
        //calculo semanas
        $_calc_semanas = (int) ($_segundos / 604800);
        $_sobra_semana = $_segundos % 604800;
        //calculo dias
        $_calc_dias = (int) ($_sobra_semana / 86400);
        $_sobra_dias = ($_sobra_semana % 86400);
        //calculo horas
        $_calc_horas = (int) ($_sobra_dias / 3600);
        $_sobra_horas = ($_sobra_dias % 3600);
        //calculo minutos e segundos
        $_calc_minutos = (int) ($_sobra_horas / 60);
        $_calc_segundos = ($_sobra_horas % 60);
    ?>
    <main>
        <h1>Caculadora de Tempo</h1>
        <form action="" method="get">
            <label for="seg">Quantos segundos quer calcular?</label>
            <input type="number" name="secund" id="secund" value="<?=$_segundos?>">
            <input type="submit" value="Calcular">
        </form>
        <h1>Totalizando tudo...</h1>
        <p>Analisando o valor que você digitou,  <strong><i><?=number_format($_segundos, 0, ",", ".")?></i></strong> segundos equivalem a um total de:</p>
        <ul>
            <li id="italico"><strong><?=number_format($_calc_semanas, 0, ",", ".")?> Semanas</strong> </li>
            <li id="italico"><strong><?=number_format($_calc_dias, 0, ",", ".")?> Dias</strong> </li>
            <li id="italico"><strong><?=number_format($_calc_horas, 0, ",", ".")?> Horas</strong></li>
            <li id="italico"><strong><?=number_format($_calc_minutos, 0, ",", ".")?> Minutos</strong></li>
            <li id="italico"><strong><?=number_format($_calc_segundos, 0, ",", ".")?> Segundos</strong></li>
        </ul>
    </main>
</body>
</html>