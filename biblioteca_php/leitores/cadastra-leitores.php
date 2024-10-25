<?php
    include "../config.php";
    if (!$conn){ //se a conexão falhar, exibe uma mensagem de erro e encerra a execução
        die("Falha na conexão" . mysqli_connect_error());
    }

//recebe os dados do formulário

$nome ="$_POST[nome]";
$dtnasc = "$_POST[dtnasc]";
$telefone = "$_POST[telefone]";
$ra = "$_POST[ra]";
$endereco = "$_POST[endereco]";
$sexo = "$_POST[sexo]";

//cria variável para inserir o registro

$sql = "INSERT INTO `leitores` (Nome, Data_Nascimento, Telefone, RA, Endereço, Sexo)
VALUES ('$nome', '$dtnasc', '$telefone', '$ra', '$endereco', '$sexo')";


//Executa a consulta SQL. Se falhar, exibe o erro do banco de dados 

$query = mysqli_query(mysql: $conn,query: $sql) or 
die(mysqli_error(mysql: $conn));
//os dois pontos servem pra dizer "para conectar o mysql usar a variável conn "e (de +informações).
if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso!!<br>";

}

else {
    echo "<center>";
    echo "Parece que houve um erro ao cadastrar :(<br>";
    echo "<a href='form-cadastra-leitores.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}


?>

<p>Pronto! Agora você pode comprar ou alugar nossos livros. Aproveite!</p> <br>
<a href="../index.php">Início</a> 