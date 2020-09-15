<?php
    //variavel responsavel pela conexao com o bd escola.
    $conn = new PDO("mysql:dbname=escola;host=localhost", "root", "root");

    $stmt = $conn->prepare("insert into alunos(nome, email) values(:nome, :email)");
    $vnome = "Camily Franco";
    $vemail = "camilyfranco@gmail.com";
    $stmt->bindParam(":nome", $vnome);
    $stmt->bindParam(":email", $vemail);

    $stmt->execute();
    echo "Inclusão Realizada Com sucesso";
