
    <?php

      //Array faz um conjunto de variáveis com o mesmo nome, como por exemplo, carros. Vários carros (variaveis possiveis, em um só conjunto)
      
      $carros = array('Palio', 'Corsa', 'Siena', 'Fiesta', 'Renegade'); //Arrays iniciam na posição 0;
        
        echo $carros[0], "<br>";
        echo $carros[1], "<br>";    
        echo $carros[2], "<br>";
        echo $carros[3], "<br>";
        
        echo count($carros);

        //Adicionando Novos Elementos
        $carros[5] = "Etios";
        $carros[11] = "Hilux";
        $carros[] = "Sandero";

        echo $carros[5], "<br>"; //Resultado Etios
        echo $carros[6], "<br>"; //Nenhum resultado
        echo $carros[11], "<br>"; //Resultado Hilux
        echo $carros[12], "<br>"; //Resultado Sandero
        $carros["s1"] = "Siena";  //usando string como índice
        echo $carros["s1"], "<br>"; //Resultado Siena


        echo $carros[13], "<br>";
        $carros[13] = "Camaro";
        echo $carros[13], "<br>";
        $carros[6] = "Brasília";


        echo "<pre>";
        print_r($carros);
        echo "</pre>";


        echo "<pre>";
        var_dump($carros);
        echo "</pre>";





    ?>
