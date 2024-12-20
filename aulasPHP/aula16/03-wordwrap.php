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
           $txt = "Este é um exemplo de uma string gigante que vai mostrar  o funcionamento muito legal que é útilizando o wordwrap";
           $res = wordwrap($txt, 5 , "<br>\n", true);
           echo ($res);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>