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
        /* Esse exercicio pretende demonstrar o uso de
        operadores de incremento e decremento*/
        
            $atual = $_GET["aa"]; # esta linha vai pegar o ano na URL
            echo "O ano atual é $atual e o ano anterior é " . --$atual;

        ?>
    </div>
</body>
</html>