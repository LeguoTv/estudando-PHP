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
           $txt = "Curso em video";
           $tamanho = strlen($txt);
           echo "o que tem escrito é { $txt }<br>
            e a quantidade de caracter são de $tamanho";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>