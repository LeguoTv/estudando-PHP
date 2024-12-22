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
            $nome2 = ucwords($nome);
            echo "Seu nome é $nome2";
            // a primeira letra de cada nome ficara em Maiúscula    
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>