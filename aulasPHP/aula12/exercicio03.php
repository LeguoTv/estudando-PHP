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
            $t = isset($_GET["tabuada"])?$_GET["tabuada"]:1;
            $i = 1;
            echo "<h2>Mostrar a Tabuada de $t</h2>";
            do{
                $calculo = $t * $i;
                echo "$t x $i = " . $calculo . "<br>";
                $i++;
            }while($i <= 10);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>