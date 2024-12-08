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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "Araiz de $valor é igual a $rq <br>";
            echo " O numero formatado fica (Araiz de $valor é igual a) " . 
            number_format($rq, 2);
        ?>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>
</html>