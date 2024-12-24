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
           $v = array(2 =>"A",5=> "J",0=> "M", 3=> "X", 4=> "K");
           print_r($v);
           ksort($v);
           /*
            ira deichar os indices em ordens as letras não ficarão mas o que importa é que o que vai intereçar é basicamente deixar o indice em ordem!

            Já o krsort($v) vai  funcionar basicamente da mesma maneira so ele vai ordenar por chaves so que em ordem reversa
           */
           print_r($v);
        ?>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>