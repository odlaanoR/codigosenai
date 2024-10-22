<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca database</title>
    <link rel="stylesheet" href="estilo-cadastro.css">
</head>
<body>
    <header>
        <h1>Biblioteca poggers</h1>
    </header>
    <p>Preencha os campos abaixo, de acordo com os dados, corretamente.</p>
        <form action="cadastra-leitores.php" method="post">
            <table class="cadastro">
                <tr>
                    <td>
                        <label for="nome">Nome:</label> <br>
                        <input type="text" name="nome"> <br>
                    </td>
                    <td>
                        <label for="dtnasc">Data de Nascimento:</label> <br>
                        <input type="date" name="dtnasc"> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telefone">Telefone:</label> <br>
                        <input type="text" name="telefone"> <br>
                    </td>

                    <td>
                        <label for="ra">RA:</label> <br>
                        <input type="text" name="ra"> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="endereco">Endereço:</label> <br>
                        <input type="text" name="endereco"> <br>
                    </td>
                    <td>
                        <label for="sexo">Sexo:</label> <br>
                        <select name="sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Prefiro não falar">Prefiro não falar</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" class="botao" value="Enviar">
        </form>

    <footer>
        <p>Aluno: Ronaldo Cesar <br> 
        <a href="https://github.com/odlaanoR" target="_blank">Mais Códigos</a> </p>
    </footer>
</body>
</html>
