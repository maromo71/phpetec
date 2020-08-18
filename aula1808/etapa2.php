<!doctype html>
<html lang="en">

<head>
    <title>Cadastramento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Cadastramento</h1>
            <p class="lead">Etapa 2 / 3</p>
        </div>
    </div>
    <div class="container">
        <form action="etapa3.php" method="post">
            <input type="hidden" name="txtNome" id="nome" value="<?= $_POST['txtNome'];?>">
            <input type="hidden" name="txtEmail" id="email" value="<?= $_POST['txtEmail'];?>">
            <input type="hidden" name="txtDataNasc" id="dataNasc" value="<?= $_POST['txtDataNasc'];?>">
            <input type="hidden" name="optSexo" id="sexo" value="Masculino" value="<?= $_POST['optSexo'];?>">
            <input type="hidden" name="txtProfissao" id="profissao" value="<?= $_POST['txtProfissao'];?>">

            Telefone: <input type="text" name="txtTelefone" id="telefone"><br />
            Endereço: <input type="text" name="txtEndereco" id="endereco"><br />
            Cidade: <input type="text" name="txtCidade" id="cidade"><br />
            Estado: <input type="text" name="txtEstado" id="estado"><br />
            CEP: <input type="text" name="txtCep" id="cep"><br />
            <input type="submit" value="Proseguir >>>">

        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>