<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operações Aritméticas</title>
</head>
<body>
<div>
    <?php
/*
        $n1 = 3;
        $n2 = 2;
*/
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";

        $s = $n1 + $n2;
        $m = ($n1 + $n2) / 2;

        echo "A soma entre $n1+$n2";

        echo "<br/>A soma vale " .($n1+$n2);
        echo "<br/>A subtração vale " .($n1-$n2);
        echo "<br/>A multiplicação vale " .($n1*$n2);
        echo "<br/>A divisão vale " .($n1/$n2);
        echo "<br/>A módulo vale " .($n1%$n2);
        echo "<br/>A média vale $m";


        
    ?>
</div>
</body>
</html>