<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=book_4_spark" />
</head>
<body>

    <div class="nav">
        <a href="leitores/form-cadastra-leitores.php"><button>Login</button></a>
        <a href="./funcionário/form-funcionario.php"><span class="material-symbols-outlined">
book_4_spark</span></a>
    </div>

<header>
        <h1>Biblioteca Poggers</h1>
    </header>
 <div class="corpo">
     
     <p>Seja bem-vindo ao nosso caixa virtual, cliente! Parece que você já está familiarizado com nossa biblioteca não é?<br>
        Confira as opções de nossos livros:    
    </p>
     <?php
         echo "<table class='livros'><tr>";
             for ($x = 1;  $x <= 5; $x++) {
             echo "<td><a href='./compras/emprestimos.php'><img src='imgs/$x.jpg'></a></td>";
         }
         echo "</tr>";
         echo "<tr>";
             for ($x = 6; $x <= 10; $x++) {
             echo "<td><a href='./compras/emprestimos.php'><img src='imgs/$x.jpg'></a></td>";
         }
         echo "</tr></table>";
     ?>
     
     <p>Gostou de algum de nossos exemplares? Faça o login em nosso sistema, e desfrute de nossos livros! </p>
 </div>
<a href="./compras/emprestimos.php" class="comprar">Comprar/Alugar</a>


<footer>
        <p>Aluno: Ronaldo Cesar <br> 
        <a href="https://github.com/odlaanoR" target="_blank" class="cod">Mais Códigos</a> </p>

</footer>
</body>
</html>