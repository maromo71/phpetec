<?php
    //variavel responsavel pela conexao com o bd escola.
    $conn = new PDO("mysql:dbname=escola;host=localhost", "root", "root");
    $stmt = $conn->prepare("delete from alunos where rm=:rm");

    $vrm = 6;

    $stmt->bindParam(":rm", $vrm);
    $stmt->execute();
    echo "Registro excluído com sucesso <br />";
    echo "<a href='codigo01.php'>Home</a>";
