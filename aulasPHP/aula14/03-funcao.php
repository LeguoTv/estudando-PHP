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
            function soma (){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for($i = 0; $i < $t; $i++){
                    $s += $p[$i];
                }
            return $s;
            }

            $r = soma (3,5,2,10,7,9,4);
            echo "A soma dos valores é $r";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>