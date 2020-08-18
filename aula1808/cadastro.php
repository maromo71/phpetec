<?php
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $datanasc = $_POST["txtDataNasc"];
    $sexo = $_POST["optSexo"];
    $profissao = $_POST["txtProfissao"];
    $telefone = $_POST["txtTelefone"];
    $endereco = $_POST["txtEndereco"];
    $cidade = $_POST["txtCidade"];
    $estado = $_POST["txtEstado"];
    $cep = $_POST["txtCep"];
    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];
    $confirmacao = $_POST["txtConfirmacao"];

    if($senha == $confirmacao){
        echo "senha confere";
    }else{
        echo "recadastre a senha";
        return;
    }
    echo "<h1>Cadastro feito</h1>";
    echo "<h2>Dados</h2>";
    echo "Nome: $nome <br />";
    echo "Telefone: $telefone <br />";
    echo "Usuario: $usuario <br />";
    $metodo = getenv("REQUEST_METHOD");
    echo "Metodo: $metodo";