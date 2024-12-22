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
           $txt = str_repeat("PHP",5);
           echo "O texto gerado foi $txt";
           //ele vai repetir PHP 5 vezes
           echo "<br>".(str_repeat("-",20));
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>