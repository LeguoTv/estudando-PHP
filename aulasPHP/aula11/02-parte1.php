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
      <form action="02-parte2.php" method="get">
        
      <?php 
          $c = 1;
          while ($c <= 5){
            echo "valor $c: <input type='number' name='v$c' max='100' min='0' > <br>";
            $c++;
          }
          ?>
                    <input type="submit" value="Enviar">

      </form>
    </div>
  </body>
</html>
