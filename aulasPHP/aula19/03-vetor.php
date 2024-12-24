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
           print_r($v);
           array_unshift($v, "O");//adiciona o elemento no inicio do vetor
           /*
           O comando array_shift($v) ele vai eliminar o primeiro vetor no caso ele vai tirar o "A" 
           */
           print_r($v);
        ?>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>