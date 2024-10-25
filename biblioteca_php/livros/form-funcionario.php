<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro</title>
</head>
<body>

    <p>Confirme se você é mesmo um de nossos funcionários preenchendo corretamente os dados nos campos abaixo.</p>

    <form action="confirmar-funcionario.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="email">Email</label> <br>
                    <input type="text" name="email">
                </td>
                <td>
                    <label for="senha">Senha:</label> <br>
                    <input type="text" name="senha">
                </td>
            </tr>
        </table>

        <input type="submit" value="Enviar" style="cursor: pointer;">


















    </form>
</body>
</html>