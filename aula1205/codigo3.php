<?php
    $menu = "Menu do Restaurante <br >";
    $menu .= "1. Coca-cola <br >";
    $menu .= "2. Sprite <br >";
    $menu .= "3. Skol <br>";
    $menu .= "Sua opcao: ";
    echo $menu;
    $opcao = 44;
    switch($opcao){
        case 1:
            echo "Voce escolheu coca-cola <br >";
            break;
        case 2:
            echo "Voce escolheu Sprite <br >";
            break;
        case 3:
            echo "voce escolheu skol <br >";
            break;
        default:
            echo "opcao invalida <br >";
            break;
    }

   