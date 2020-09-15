<?php
//variavel responsavel pela conexao com o bd escola.
    $conn = new PDO("mysql:dbname=escola;host=localhost", "root", "root");
    //Estabeler o inicio de uma transação
    $conn->beginTransaction();

    $stmt = $conn->prepare("delete from alunos where rm=:rm");

    $vrm = 2;

    $stmt->bindParam(":rm", $vrm);
    $stmt->execute();

    //Poxa me arrependi
    //$conn->rollBack();

    //Não me arrenpei
    $conn->commit();
    
    echo "Registro excluído com sucesso <br />";
    echo "<a href='codigo01.php'>Home</a>";