<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="gerencia.php">
            <input type="hidden" name="operacao" value="inclusao">
            <p>
                Código do Produto: <input type="text" name="codigo_produto" size="5"><br>
                Nome do Produto: <input type="text" name="nome_produto" size="50"><br>
                Descrição do Produto: <input type="text" name="descricao_produto" size="20">
            </p>
            <p>
                <input type="submit" value="Incluir" name="incluir">
            </p>
        </form>
    </div>
    <div class="container">
        <form method="POST" action="gerencia.php">
            <input type="hidden" name="operacao" value="alteracao">
            <p>
                Código do Produto: <input type="text" name="codigo_produto" size="5"><br>
                Novo Nome do Produto: <input type="text" name="nome_produto" size="50"><br>
                Nova Descrição do Produto: <input type="text" name="descricao_produto" size="20">
            </p>
            <p><input type="submit" value="Alterar" name="alterar"></p>
        </form>
    </div>
    <div class="container">
        <form method="POST" action="gerencia.php">
            <input type="hidden" name="operacao" value="exclusao">
            <p>
                Código do Produto: <input type="text" name="codigo_produto" size="5"><br>
            </p>
            <p><input type="submit" value="Excluir" name="excluir"></p>
        </form>
    </div>
</body>

</html>