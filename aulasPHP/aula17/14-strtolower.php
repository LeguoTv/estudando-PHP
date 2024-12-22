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
           $nome = "Luis Fernando";
           //posso colocar também. $nome2 = strtolower($nome); echo "Seu nome é $nome2";
           echo("Seu nome é ". strtolower($nome));
           /*string para letras menusculas! ele retorna o que o 
           usuario digitar em Maiúscula para menúscula!*/
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>