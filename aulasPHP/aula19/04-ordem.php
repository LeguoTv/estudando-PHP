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
        <pre>
        <?php 
           $v = array("A", "J", "M", "X", "K");
           print_r($v);
           asort($v);  // vai deixar em ordem
           /*
           O rsort($v); vai deixar em ordem so que na possition reversa!

           Já o Asort($v); Alem de meche com os valores ele vai mecher também com os indeces 

           e o arsort($v); os elemento vai estar em ordens reversas  mas os indeces foram mantidos associativos
           */

           print_r($v);
        ?>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>