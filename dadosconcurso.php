<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
    <h1>Informações Pessoais</h1>
    <p>Nome Completo: <?php echo $_POST["nc"]?> </p>
    <p>Data de Nascimento <?php echo $_POST["dn"]?> </p>
    <p>Sexo: <?php echo $_POST["sexo"]?> </p>
    <p>Estado Civil: <?php echo $_POST["ecl"]?> </p>
    <p>nacionalidade: <?php echo $_POST["nacionalidade"]?> </p>
    <p>RG: <?php echo $_POST["rg"]?> </p>
    <p>CPF: <?php echo $_POST["cpf"]?> </p>
    <p>Estado Civil: <?php echo $_POST["ec"]?> </p>
    <p>Logradouro: <?php echo$_POST["log"]?> </p>
    <p>Número: <?php echo $_POST["num"]?> </p>
    <p>Complemento: <?php echo $_POST["comp"]?> </p>
    <p>Bairro: <?php echo $_POST["bairro"]?> </p>
    <p>Cidade: <?php echo $_POST["cidade"]?> </p>
    <p>Estado: <?php echo $_POST["estado"]?> </p>
    <p>CEP: <?php echo $_POST["cep"]?> </p>
    <p>Telefone: <?php echo $_POST["telefone"]?> </p>
    <p>Email: <?php echo $_POST["email"]?> </p>

</body>
</html>