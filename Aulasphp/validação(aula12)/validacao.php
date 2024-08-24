<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php

        $user = $_POST["nome"];
        $pass = $_POST["senha"];

        if($user == "maria" and $pass == "123456") {
            echo "<a href='https:/sites.google.com/view/garagemdoperigo/p%C3%A1gina-inicial' target='next'>???????????</a>";
        }
        else {
            $erro = "SAIA DAQUI AGORA, VC NÃO DEVERIA ESTAR AQUI!";
            header("location: index.php?erro=$erro");
        }
    ?>

    
</body>
</html>