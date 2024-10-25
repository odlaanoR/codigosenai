<?php
//Configuração de dados

$db_host = "localhost"; //Hostname do servidor de banco de dados
$db_user = "root"; //Nome de usuário para conectar ao banco de dados
$db_pass = ""; // Senha para conectar ao banco de dados (vazio = sem senha)
$db_name = "db_biblioteca"; // Nome do banco de dados a conectar

// Conectar ao banco de dados
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Verificar se a conexão foi bem-sucedida
if ($conn->connect_error){

//a seta -> é usada para acessar propriedades e métodos de objetos em PHP, tornando o código mais legível e fácil entender
    die("Vish, parece que deu um problema na conexão: {$conn->connect_error} :/");

}
else {

    echo "<p style='class: hidden'; Pronto! Sua conexão foi bem-sucedida :D </p>";
}
?>

<p ></p>