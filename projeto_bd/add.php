<?php
    require_once 'init.php';

    //pegar dados do formulário
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;

    //Tem vazio ? Se tiver, pede ao usuário para preencher novamente. E depois aborta.
    if( empty($name)  ||  empty($email) || empty($gender) || empty($birthdate) ){
        echo "Favor preencher todos os campos";
        exit;
    }
    
    $PDO = db_connect();
    $sql = "Insert into users(name, email, gender, birthdate) values (:name, :email, :gender, :birthdate)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':birthdate', $birthdate);
    
    if($stmt->execute()){
        header('Location: index.php');

    }else{
        echo "Erro ao cadastrar <br />";
        print_r($stmt->errorInfo());
    }


