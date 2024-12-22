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
           $nome = "luis fernando";
           echo (strrev($nome));
           // ele ira retornar o nome passado escrito de tras para frente 
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>