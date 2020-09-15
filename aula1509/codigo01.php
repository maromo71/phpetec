<?php
//variavel responsavel pela conexao com o bd escola.
    $conn = new PDO("mysql:dbname=escola;host=localhost", "root", "root");
    //Statement
    $stmt = $conn->prepare("select * from alunos order by nome");
    //Executa o statement
    $stmt->execute();
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Lista de Alunos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron">
        <h1 class="display-3">Alunos</h1>
    </div> 
    <table class="table table-striped">
    <thead>
        <tr>
            <th>RM</th>
            <th>Aluno</th>
            <th>Email</th>
            <th>Data de Cadastro</th>
        </tr>
    </thead>
    <tbdoy>
        <?php
            foreach($alunos as $aluno){
                echo "<tr>";
                foreach($aluno as $value){
                    echo "<td>";
                    echo $value;
                    echo "</td>";    
                }
                echo "</tr>";
            }
        ?>
    </tbdoy>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>