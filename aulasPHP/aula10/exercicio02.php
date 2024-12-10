<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/stylo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $d = $_GET["ds"] ? $_GET["ds"] : 0;
            switch ($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :D";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno garfanhoto! ;D";
                    break;
                default:
                    echo "Dia da semana invalido";
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>