<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/stylo.css">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = intval($_POST["numero"]);
    $multiplicadores = [];
    
    // Verificar os divisores do número
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $multiplicadores[] = $i;
        }
    }

    // Contar os múltiplos
    $totalMultiplos = count($multiplicadores);

    // Verificar se é primo (apenas 2 divisores)
    if ($totalMultiplos == 2) {
        $resultado = "O número $numero É PRIMO!";
    } else {
        $resultado = "O número $numero NÃO É PRIMO!";
    }

    // Exibir os resultados
    echo "<h1>Analisando o número: $numero</h1>";
    echo "<p>Valores múltiplos: " . implode(" ", $multiplicadores) . "</p>";
    echo "<p>Total de múltiplos: $totalMultiplos</p>";
    echo "<p>Resultado: $resultado</p>";
}
?>


<a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>

