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
            <table border="1"><tr>
        <?php 
           $c = range(5,20,2);
           foreach($c as $v){
            echo "<td>$v ";
           }
        ?>
        </tr>
        </table>
        </pre>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>