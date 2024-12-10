<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/stylo.css" />
    <title>Document</title>
</head>
<body>
    <div>
<?php

            $s = isset ($_GET["estados"])?$_GET["estados"]:"estados";
            $regiao = "";
                switch ($s) {
                    case "AC":
                    case "AM":
                    case "AP":
                    case "PA":
                    case "RO":
                    case "RR":
                    case "TO":
                        $regiao = "Norte";
                        break;
                    case "AL":
                    case "BA":
                    case "CE":
                    case "MA":
                    case "PB":
                    case "PE":
                    case "PI":
                    case "RN":
                    case "SE":
                        $regiao = "Nordeste";
                        break;
                    case "DF":
                    case "GO":
                    case "MT":
                    case "MS":
                        $regiao = "Centro-Oeste";
                        break;
                    case "ES":
                    case "MG":
                    case "RJ":
                    case "SP":
                        $regiao = "Sudeste";
                        break;
                    case "PR":
                    case "RS":
                    case "SC":
                        $regiao = "Sul";
                        break;
                }
        
                echo "O estado selecionado pertence à região: " . $regiao;
                
?>
                <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>