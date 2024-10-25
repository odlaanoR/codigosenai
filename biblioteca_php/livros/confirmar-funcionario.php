<?php

include "../config.php";

if (!$conn){ 
    die("Falha na conexão" . mysqli_connect_error());
}

$nome = isset($_POST["nome"]) ? addslashes(trim($_POST["nome"])) : FALSE;
$cpf = isset($_POST["cpf"]) ? addslashes(trim($_POST["cpf"])) : FALSE;
$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

if(!$nome || !$cpf || !$email || !$senha) 
{
	echo "Você deve preencher os campos!";
	exit;
}


