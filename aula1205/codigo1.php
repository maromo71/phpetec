<?php
    $aluno = "Rodrigo";
    $nota1 = 4;
    $nota2 = 6;
    $media = ($nota1 + $nota2) / 2;
    //se o aluno tiver media igual ou superior a 6, ele passou.
    //se nao, ele reprovou.
    if($media >= 6.0){
        //bloco - se verdadeiro
        echo "Aluno: $aluno passou com nota: $media <br > ";
    }else{
        //bloco  - se falso
        echo "Aluno: $aluno reprovado com nota: $media <br > ";
    }
