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
           echo ("Seu nome é ". ucfirst($nome));
           //ele deixa so a primeira letra colocada em maiúscula!
           // posso incrementar também com
           /*
            $nome = "luis fernando";
            $nome2 = ucfirst(strtolower($nome));
            echo ("Seu nome é $nome2");
            OBS: ele vai retornar tudo em menúsculas menos a primeira
            que ainda vai continuar em Maiúscula!
           */
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>