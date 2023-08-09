<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>
    <?php 
        $num_d = (int) 300.5;
        $num_h = 0x2f;
        $num_b = 0b1010;
        $num_o = 00;
        echo "O valor das variaveis: </br>";
        echo "Valor decimal $num_d </br>";
        echo "Valor hexadecimal $num_h </br>";
        echo "Valor Binario $num_b </br>";  
        echo "Valor em Octal $num_o </br>";
        var_dump($num_d);
        var_dump($num_h);
        var_dump($num_b);
        var_dump($num_o);
        $vet = [6, 2, 9, 3, 5];
        print_r($vet);
        var_dump($vet);
        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>    
    </p>
</body>
</html>