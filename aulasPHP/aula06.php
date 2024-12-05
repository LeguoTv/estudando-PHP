<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aulasPHP/estilo/stylo.css">
    <title>Operadores Aritimeticos</title>
</head>
<body>
    <div>
        <?php 
            $n1 = 3;
            $n2 = 2;
            $m = ($n1 + $n2) / 2;
            echo "Valores recebidos: $n1 e $n2";
            echo "<br>A soma vale ". ($n1 + $n2);
            echo "<br> A subritação vale " . ($n1 - $n2);
            echo "<br> A multiplicação vale " . ($n1 * $n2);
            echo "<br> A divisão vale " . ($n1 / $n2);
            echo "<br> o modulo ou o resto é " . ($n1 % $n2);
            echo "<br> A media vale $m";
            
        ?>
        <h3>tentando o GET</h3>
        <?php 
            $n3 = $_GET["a"];
            $n4 = $_GET["b"];
            echo "Valores recebidos: $n3 e $n4";
            echo "<br>A soma vale ". ($n3 + $n4);
            echo "<br> A subritação vale " . ($n3 - $n4);
            echo "<br> A multiplicação vale " . ($n3 * $n4);
            echo "<br> A divisão vale " . ($n3 / $n4);
            echo "<br> o modulo ou o resto é " . ($n3 % $n4);
            echo "<br> A media vale $m";
        ?>
    </div>
</body>
</html>