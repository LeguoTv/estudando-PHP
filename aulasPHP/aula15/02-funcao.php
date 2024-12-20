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
            require "funcoes.php"; // "includ" ou "require" fazem quase a mesma coisa so que são diferentes!!
            echo "<h1>Testando novas funcões</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando Programa...</h2>"
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>