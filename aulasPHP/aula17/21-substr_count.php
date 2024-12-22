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
           $frase = "Estou aprendendo PHP no Curso em Vídeo de PhP";
           $cont = substr_count($frase,"PHP");
           echo "PHP encontrado $cont vezes"
           /*ele vai mostrar quantas vezes a string PHP apareceu dentro da frase */
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>