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
           $nome= "Fernando";
           $novo = str_pad($nome,30," ",STR_PAD_RIGHT);
           echo ("O aluno $novo é lindo!");
           /* ele vai mostrar (O aluno fernando         é lindo) */
           //esta tentando fazer com que o Fernando caiba em 30 caracter usando
           //str_pad
           /*basicamente o que ele esta fazendo éque ele coloque espaçosque é o proximo parametro depôs de 30 e vai usar um STR_PAD_RIGHT que vai complementar a direita! */
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>