<?php
    $num=500;
    function escopo1(){
        global $num;
        $num += 5; 
        echo $num . "<br>";
    }
    echo $num . "<br>";
    escopo1();