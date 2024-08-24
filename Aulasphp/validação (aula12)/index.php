<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yrfh h pduld?</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <form action="validacao.php" method="post">
        <table>
        <tr>
            <td><label for="nome">Nome:</label></td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td><label for="senha">Senha:</label></td>
            <td><input type="text" name="senha"></td>
        </tr>
        <tr>
            <td><p <?php echo (isset($_GET["erro"])?$_GET["erro"]:"")?>></p></td>
        </tr>
        </table>
        <input type="submit" value="Acessar" class="butao">
        </form>
</body>
</html>