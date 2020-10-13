<?php
    require_once 'init.php';
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if (empty($id)){
        echo "Sem ID informado <br />";
        exit;
    }
    $PDO = db_connect();
    $sql = "Delete from users where id=:id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if($stmt->execute()){
        header('Location: index.php');

    }else{
        echo "Erro ao excluir <br />";
        print_r($stmt->errorInfo());
    }
