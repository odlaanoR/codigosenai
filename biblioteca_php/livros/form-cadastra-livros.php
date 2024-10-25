<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="estilo-livro.css">
</head>
<body>

<div class="nav">
        <a href="../index.php"><button>Início</button></a>
        <a href="../compras/emprestimos.php"><button>Emprestimos</button></a>
    </div>

    <header>
        <h1>Cadastramento de Livros</h1>
    </header>
    <p>Bem-vindo a página de cadastramento de livros, funcionário! <br>
        Abaixo, digite os dados dos livros que ele logo ficará disponível em nosso site para os clientes comprarem no futuro. </p>
    <form action="cadastra-livros.php" method="post">
        <table class="cadastro">
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
            <td><label for="dtpubli">Publicação:</label> <br>
            <input type="text" name="dtpubli">
        </td>
        <td>
            <label for="genero">Gênero</label> <br>
            <input type="text" name="genero">
        </td>
         </tr>
         <tr>
            <td colspan="2" align="center">
                <label for="editora">Editora</label> <br>
                <input type="text" name="editora">
            </td>
         </tr>
        </table>
        <input type="submit" value="Enviar" style="cursor: pointer">

    </form>


    <footer>
     <p>
        Aluno: Ronaldo Cesar <br>
        <a href="https://github.com/odlaanoR" target="_blank">Mais códigos</a>
     </p>
    </footer>
</body>
</html>