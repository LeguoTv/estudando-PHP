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
           array_push($v, "O");
           // se colocar array_pop($v) ele vai eliminar
           // do vetor v o ultimo elemento que neste cado é o "K"
           print_r($v);
        ?>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>