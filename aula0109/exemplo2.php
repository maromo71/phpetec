<?php
    require_once("config.php");
    if(isset($_SESSION["usuario"])){
        echo "Boa Tarde " .  $_SESSION["usuario"] . "<br />";
    }else{
        echo "Boa Tarde Anônimo <br />";
    }
    session_regenerate_id();
    session_destroy();

    