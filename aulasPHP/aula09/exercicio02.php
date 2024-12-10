<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../estilo/stylo.css" />
    <title>Document</title>
  </head>
  <body>
    <div>
        <?php 
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tera $i anos<br>";
            if ($i < 16){
                $tipodevoto = "Não vota";
            } elseif (($i >= 16 and $i < 18) or ($i>65)) {
                    $tipodevoto = "Voto opcional";
                } else {
                    $tipodevoto = "Voto Obrigatorio";
                }
            
            echo "Para esta idade, $tipodevoto";
        ?>
        <a href="exercicio02.html">Voltar</a>
    </div>
  </body>
</html>
