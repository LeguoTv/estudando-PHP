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
           //quantidade de palavras de uma string!

           $frase = "Eu vou estudar PHP no curso em Video";
           $cont = str_word_count($frase, 2);
           print_r ($cont);
            /* 
            o valor 0 é para contrar por palavras.

            o valor 1 no lugar do 0 ele ira gerar um vetor e para exibir um vetor é com print_r ($cont);

            o valor 2 ele vai gerar um vetor também so que os indices ficarão Array ( [0] => Eu [3] => vou [7] => estudar [15] => PHP [19] => no [22] => curso [28] => em [31] => Video ) 
            */

           
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>