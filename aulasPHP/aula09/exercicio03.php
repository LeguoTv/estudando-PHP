<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../estilo/stylo.css" />
    <title>Document</title>
    <style>
        span{
            font-weight: bold;
            font-size: 20px;
            color: red;
        }
    </style>
  </head>
  <body>
    <div>
        <?php 
            $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
            $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
            $calculo = (($n1 + $n2) / 2); 
            echo "<p>A Média entre <span>$n1</span> e <span>$n2</span> é igual a: <span>$calculo</span> </p>" ;
            if ($calculo <= 5){
                $situacao = "REPROVADO";
            }
            elseif ($calculo >= 5.5 and $calculo < 7){
                $situacao = "RECUPERAÇÃO";
            }
            else{
                $situacao = "APROVADO";
            }
            echo "<p>Situação do aluno: <span>$situacao</span></p>";
        ?>
        <a href="exercicio03.html">Voltar</a>
    </div>
  </body>
</html>
