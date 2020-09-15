<?php
    //variavel responsavel pela conexao com o bd escola.
    $conn = new PDO("mysql:dbname=escola;host=localhost", "root", "root");

    $stmt = $conn->prepare("update alunos set nome= :nome, email= :email where rm=:rm");

    $vrm = 6;
    $vnome = "Camily Franco";
    $vemail = "camilyfranco@fatec.sp.gov.br";
    $stmt->bindParam(":rm", $vrm );
    $stmt->bindParam(":nome", $vnome );
    $stmt->bindParam(":email", $vemail );
    
    $stmt->execute();
    echo "Registro alterado com sucesso <br />";
    echo "<a href='codigo01.php'>Home</a>";
?>

