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
           $vetor [0] = "Curso";
           $vetor [1] = "Em";
           $vetor [2] = "Video";
           $texto = implode("#", $valor);
           // a funcão join() funciona também da mesma maneira no lugar do implode
           print($texto);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>