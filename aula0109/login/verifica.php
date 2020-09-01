<?php
    session_start();
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    if($usuario == "adm" && $senha=="123"){
        $_SESSION["usuario"] = "adm";
        header("Location: index.php");
    }else{
        session_unset();
        header("Location: login.php");
    }