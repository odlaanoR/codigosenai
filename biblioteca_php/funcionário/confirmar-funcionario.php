<?php

include "../config.php";

if (!$conn){ 
    die("Falha na conexão" . mysqli_connect_error());
}

$email = "$_POST[email]";
$senha = "$_POST[senha]";

$sql = mysqli_query($conn, "SELECT * FROM `funcionários` WHERE Email = '$email' AND Senha = '$senha'") or die("parece que houve um erro :(");	

	if (mysqli_num_rows($sql)<=0){
		echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='form-funcionario.php';</script>";
        die();	
	}

	else {
		setcookie("Email", $email);
		header("Location: adm.php");
	}

	
?>

