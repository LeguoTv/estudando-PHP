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
           $site = "Curco em Video";
           $vetor = explode(" ",$site);
           /* explode vai procurar pelos espaços em seguida qual a string que vai ser quebrada dentro de um vetor dentro de um array*/
           print_r($vetor);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>