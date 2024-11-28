 <?php   

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / $altura ** 2;

    echo $imc;
    header("Location: imc.php?res=$imc&peso=$peso&altura=$altura");

    ?>
