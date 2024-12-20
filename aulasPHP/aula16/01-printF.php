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
            $p = "Leite";
            $pr = 4.5;
            //echo "O $p custa R$ " . number_format($pr, 2);
            printf ("O %s custa R$ %.2f" , $p, $pr);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>