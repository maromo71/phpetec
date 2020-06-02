<?php
    //Declarar variáveis do tipo vetor
    $carros_fiat = array("Uno", "Palio", "500", "Argos");
    $notas = array(7.8, 8.3, 9.1, 6.9);
    $soma = 0;
    
    //Acessar  os indices de um vetor
    echo "Nota na terceira posição: $notas[2] <br/>";
    
    //Percorrer os indices de um vetor
    for ($i=0; $i < 4; $i++) { 
        echo "A nota é: $notas[$i] <br />";
        $soma = $soma + $notas[$i];
    }
    $media = $soma / 4;
    echo "A média das 4 notas: $media <br />";
    echo "<br />";
    echo "Carros da Fiat <br />";
    for ($i=0; $i < 4; $i++) { 
        echo "Modelo: $carros_fiat[$i] <br />";
    }

    

    //Exemplo prático

    //Exercício e tarefa para entrega