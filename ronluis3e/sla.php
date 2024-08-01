<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $carros = array('Palio', 'Corsa', 'Siena', 'Fiesta', 'Renegade'); //Arrays iniciam na posição 0;
        
        echo $carros[0], "<br>";
        echo $carros[1], "<br>";
        echo $carros[2], "<br>";
        echo $carros[3], "<br>";
        
        echo count($carros);

        //Adicionando Novos Elementos
        $carros[5] = "Etios";
        $carros[11] = "Hilux";
        $carros[] = "Sandero";

        echo $carros[5], "<br>";
        echo $carros[6], "<br>";
        echo $carros[11], "<br>";
        echo $carros[12], "<br>";

    ?>
</body>
</html>