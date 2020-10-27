<?php
require_once 'init.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
if (empty($id)) {
    echo "Não foi definido o ID";
    echo "<br ><a href='index.php'>Voltar</a>";
    return;
}
$PDO = db_connect();
$sql = "Select name, email, gender, birthdate FROM users WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!is_array($user)) {
    echo "Não foi encontrado usuário com esse ID";
    echo "<br ><a href='index.php'>Voltar</a>";
    return;
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Alteração de Dados do Usuário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-3">Alteração de Dados</h1>
    </div>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>" />
        <div class="container">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?= $user['name'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="" value="<?= $user['email'] ?>">
            </div>
            Sexo:<br>
            <div class="form-check form-check-inline">
                <?php
                $gender = $user['gender'];
                ?>
                <label class="form-check-label">
                    <?php
                    if ($gender == 'm') {
                        echo "<input class='form-check-input' checked type='radio' name='gender' id='gender' value='M'>Masculino &nbsp;";
                    } else {
                        echo "<input class='form-check-input' type='radio' name='gender' id='gender' value='M'>Masculino &nbsp;";
                    }
                    ?>
                </label>
                <label class="form-check-label">
                    <?php
                    if ($gender != 'm') {
                        echo "<input class='form-check-input' checked type='radio' name='gender' id='gender' value='F'>Feminino &nbsp;";
                    } else {
                        echo "<input class='form-check-input' type='radio' name='gender' id='gender' value='F'>Feminino &nbsp;";
                    }
                    ?>
                </label>
            </div>
            <div class="form-group">
                <label for="birthdate">Data de Aniversário</label>
                <input type="date" class="form-control" name="birthdate" id="birthdate" value="<?= $user['birthdate'] ?>">
            </div>
            <input class="btn btn-primary" type="submit" value="Alterar">
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>