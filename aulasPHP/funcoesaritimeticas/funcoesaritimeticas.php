<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/stylo.css">
    <title>tipos</title>
    <style>
        sup{
            position: absolute;
            margin-left: 87px;
            margin-top: 34px;
        }
    </style>
   
</head>
<body>
<div>
<?php
$v1 = $_GET["x"];
$v2 = $_GET["y"];

echo "Valores recebidos: $v1 e $v2<br>";
echo "O valor absoluto de $v2 é " . abs($v2) . "<br>";
echo "O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2) . "<br>";
echo "A raiz de $v1 e " . sqrt($v1) . "<br>";
echo "O valor de $v2 arredondago é " . round($v2). "<be>"; // ceil floor
echo "A parte inteira de $v2 e " . intval($v2) . "<br>";
echo "O valor de $v1 em moeda e R$" . number_format($v1,2,",", ".");
?>
</div>
</body>
</html>