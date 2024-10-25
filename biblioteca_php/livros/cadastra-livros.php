<?php
    include "../config.php";
    if (!$conn){ 
        die("Falha na conexão" . mysqli_connect_error());
    }



$titulo = "$_POST[titulo]";
$autor = "$_POST[autor]";
$dtpubli = "$_POST[dtpubli]";
$genero = "$_POST[genero]";
$editora = "$_POST[editora]";


$sql = "INSERT INTO `livros` (Título, Autor, Data_Publi, Gênero, Editora)
VALUES ('$titulo', '$autor', '$dtpubli', '$genero', '$editora')";

$query = mysqli_query(mysql: $conn,query: $sql) or 
die(mysqli_error(mysql: $conn));


if($query){
    echo "<center>";
    echo "Livro cadastrado com sucesso!!<br>";
    echo "<a href='form-cadastra-livros.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}

else {
    echo "<center>";
    echo "Parece que houve um erro ao cadastrar o livro, tente novamente! <br>";
    echo "<a href='form-cadastra-livros.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}

?>