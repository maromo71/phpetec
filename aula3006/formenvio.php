<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
                <h1 class="display-3">Cadastro de Produto</h1>
                <p class="lead">Loja do Maromo</p>
                <hr class="my-2">
                <p>Maiores informações</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Link</a>
                </p>
        </div>
    </div>
    <div class="container">
        <form action="receber.php" method="post">
        <p>
            <label for="codigo">Código do produto: </label>
            <input type="text" name="codigo" id="codigo" size="8">
        </p>
        <p>
            <label for="codigo">Descrição do produto: </label>
            <input type="text" name="nome" id="nome" size="60">
        </p>
        <p>
            <label for="codigo">Preço do produto: </label>
            <input type="text" name="preco" id="preco" size="20">
        </p>
        <p>
            <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
            <button class="btn btn-danger" type="reset" name="limpar">Limpar</button>
        </p>
        </form>
    </div>
   
</body>
</html>