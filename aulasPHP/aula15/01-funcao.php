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
            function teste (&$x){
                $x += 2; // ou $x = $x + 2;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste ($a);
            echo "<p>O valor de A é $a</p>"
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>