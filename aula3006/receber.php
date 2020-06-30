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
        <?php
            include_once "Produto.php";
            //variável objeto produto
            $prod = new Produto();
        
            if(empty($_POST['codigo'])){
                echo "Favor cadastrar o código corretamente";
                return;
            }
            if(empty($_POST['nome'])){
                echo "Favor cadastrar o nome corretamente";
                return;
            }
            if(empty($_POST['preco'])){
                echo "Favor cadastrar o preco corretamente";
                return;
            }
            $prod->setCodigo($_POST['codigo']);
            $prod->setNome($_POST['nome']);
            $prod->setPreco($_POST['preco']);
        ?>
            <div class="container">
                <div class="jumbotron">
                        <h1 class="display-3">Cadastro de Produto</h1>
                        <p class="lead">Loja do Maromo</p>
                </div>
            </div>
        
        <?php
            //imprimir
            $prod->imprimir();
        ?>
        
    </div>
</body>
</html>