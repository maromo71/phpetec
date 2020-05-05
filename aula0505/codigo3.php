<?php
    $num=500; //fora da função
    function escopo1(){
        $num += 5; //$num = $num + 5; (num esta)
        echo $num . "<br>";
    }
    echo $num . "<br>";
    escopo1();