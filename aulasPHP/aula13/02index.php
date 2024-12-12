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
        <form action="02-tabuada.php" method="get">
            <select name="num">
                <?php 
                    for ($c = 1; $c <= 10; $c++){
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
            <a href="javascript:history.go(-1)">Voltar</a>
        </form>
        <?php 
            
        ?>
        
        
    </div>
</body>
</html>