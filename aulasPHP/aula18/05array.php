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
           $v = array ("nome" => "Ana", "idade" => 23, "peso" => 63.5);

           foreach( $v as $k => $c) {
            echo "O campo $k possui o conteudo $c <br>";
           }
        ?>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>