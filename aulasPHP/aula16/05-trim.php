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
           $nome = "   Jose da Silva   ";
           echo (strlen($nome)), "<br>";
           $novo = trim($nome);
           echo ($novo), "<br>";
           echo (strlen($novo));
           //ele vai tirar os espaços do começo e do final!
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>