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
        <pre>
        <?php 
           $v = array("A", "J", "M", "X", "K");
           $tot = count($v);
           echo "O vetor tem $tot elementos<br>";
           print_r($v);// não mostra a quantidade de elementos!
           //duas maneira de ver!
           //var_dump($v)// é um pouco mas complexa
        ?>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>