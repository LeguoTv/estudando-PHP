<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/stylo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
           $frase = "Estou aprendendo PHP";
           $pos = stripos($frase,"PHP");
           echo "$frase <br> A string foi encontrada na posição $pos";
           //mesmo com PHP em Maiúscula ele ira identificar onde esta localizado a string php
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>