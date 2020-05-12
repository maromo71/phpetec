<?php
    $prova1 = 2;
    $prova2 = 4;
    $prova3 = 6;
    $media = (($prova1*1)+($prova2*2)+($prova3*3))/6;
    if ($media<3){
        $desempenho = "pífio";
    } elseif ($media<7){
        $desempenho = "médio";
    } elseif ($media<9) {
        $desempenho = "bom";
    } else {
        $desempenho = "ótimo";
    }
    echo $media . "<br />";
    echo "<H1>Desempenho</H1>";
    echo "Seu desempenho foi $desempenho.";