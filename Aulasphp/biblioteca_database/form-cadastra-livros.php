<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <h1>Cadastramento de Livros</h1>
    <form action="cadastra-livros.php" method="post">
        <table>
         <tr>
            <td><label for="titulo">Título</label> <br>
            <input type="text" name="titulo">
        </td>
        <td>
            <label for="autor">Autor</label> <br>
            <input type="text" name="autor">
        </td>
         </tr>
         <tr>
            <td><label for="dtpubli">Publicação:</label>
            <input type="text" name="dtpubli">
        </td>
        <td>
            <label for="genero">Gênero</label> <br>
            <input type="text" name="genero">
        </td>
         </tr>
         <tr>
            <td>
                <label for="editora">Editora</label> <br>
                <input type="text" name="editora">
            </td>
         </tr>
        </table>
        <input type="submit" value="Enviar">


        <img src="/projeto_biblioteca/leitores/" alt="">
    </form>
</body>
</html>