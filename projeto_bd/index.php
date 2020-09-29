<?php
    //carregamos o bootstraping
    require_once 'init.php';
    $PDO = db_connect();
    $sql_count = 'select count(*) as total FROM users';
    $sql = 'select id, name, email, gender, birthdate FROM users order by name ASC';
    $stmt_count = $PDO->prepare($sql_count); //obter o numero de usuarios cadastrados
    $stmt_count->execute();
    $total = $stmt_count->fetchColumn();
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Lista de Usuários</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Sistema de Cadastro</h1>
        </div>
    </div>
    <div class="container">
    <a class="btn btn-primary" href="form-add.php">Adicionar um usuário</a>
    <h2>Lista de Usuários</h2>
    <p>Total de Usuários: <?=$total?> </p>
    <?php 
      if($total > 0) : ?>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Gênero</th>
                <th>Data de Nascimento</th> 
                <th>Idade</th>
                <th>Ações</th>               
            </tr>
        </thead>
        <tbody>
            <?php while($user = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?=$user['name']?></td>
                <td><?=$user['email']?></td>
                <td><?php echo ($user['gender']=='m') ? 'Masculino' : 'Feminino'?></td>
                <td><?php echo dateConvert($user['birthdate']) ?></td>
                <td><?php echo calculateAge($user['birthdate']) ?> anos</td>
                <td>
                    <a class="btn btn-success" href="form-edit.php?id=<?=$user['id']?>">Editar</a>
                    <a class="btn btn-danger" href="delete.php?id=<?=$user['id']?>" 
                        onclick="return confirm('Tem certeza de que deseja remover ?');">
                    Remover</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>  
    <?php else : ?>
        <p>Não existem usuários cadastrados</p>
    <?php endif; ?>
    </div>
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


