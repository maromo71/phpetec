<?php
$operacao = $_POST["operacao"];
$codigo_produto = $_POST["codigo_produto"];
if( (isset($_POST["alterar"]))  || isset($_POST["incluir"])) {
    $nome_produto = $_POST["nome_produto"];
    $descricao_produto = $_POST["descricao_produto"];
}
if ($operacao == "inclusao") {
    //realiza a inclusão do produto
    echo "Produto incluído com sucesso <br />";
    echo "Nome do produto: $nome_produto <br />";
} elseif ($operacao == "alteracao") {
    //realiza a alteração do produto
    echo "Produto alterado com sucesso <br />";
    echo "Nome do produto: $nome_produto <br />";
} elseif ($operacao == "exclusao") {
    //realiza a exclusão do produto
    echo "Produto excluído com o código: $codigo_produto";
}
