<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca database</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Biblioteca poggers</h1>
    </header>
    <p>Seja bem-vindo a biblioteca los zokas, aqui vc encontrará de tudo que tem para ler! Confira as opções:</p>
    <?php

        echo "<table class='livros'><tr>";
            for ($x = 1;  $x <= 5; $x++) {
            echo "<td><img src='imgs/$x.jpg'></td>";

        }
        echo "</tr>";
        echo "<tr>";
            for ($x = 6; $x <= 10; $x++) {
            echo "<td><img src='imgs/$x.jpg'></td>";
        }
        echo "</tr></table>";


    ?>


    <p>Gostou de algum deles? Faça o cadastro abaixo para conseguir alugar qualquer um desses livros e desfrutar de suas histórias! </p>
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
