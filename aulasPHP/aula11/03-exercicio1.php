<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../estilo/stylo.css" />
    <title>Document</title>
  </head>
  <body>
    <div>
        <?php 
            $inicio = isset($_GET["i"]) ? $_GET["i"]:0;
            $final = isset($_GET["f"]) ? $_GET["f"]:0;
            $incremento = isset($_GET["incremento"]) ? $_GET["incremento"]:0;

            if ($inicio <= $final){
                while ($inicio <= $final){
                    echo $inicio . "<br>";
                    $inicio += $incremento;
                    
                }
                echo "Parou";
            }
            elseif($inicio >= $final){
                while($inicio >= $final){
                    echo $inicio . "<br>";
                    $inicio -= $incremento;
                }
                echo "Parou";
            }
            
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
  </body>
</html>