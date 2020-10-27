<?php
    require_once 'init.php';
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    
    if( empty($name) || empty($email) || empty($gender) || empty($birthdate)){
        echo "Volte e preencha todos os campos";
        echo "<br ><a href='index.php'>Voltar</a>";
        return;
    }

    $PDO = db_connect();
    $sql = "UPDATE users SET name= :name, email= :email, gender= :gender, " . 
        "birthdate= :birthdate where id=:id";

    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':birthdate', $birthdate);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    if($stmt->execute()){
        header('Location: index.php');
    }else{
        echo "Erro ao executar: ";
        print_r($stmt->errorInfo());
        echo "<br ><a href='index.php'>Voltar</a>";
        return;
    }
