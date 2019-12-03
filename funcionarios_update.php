<?php
    include_once '$funcionario.class.php';
    include_once 'Db.class.php';

    $c = new Conexao();
    $c->conectar();

    $id=$_POST["id"];
    $nome=$_POST["nome"];
    $cpf=$_POST["cpf"];
    $endereco=$_POST["endereco"];
    $setor=$_POST["setor"];

    $funcionario = new Funcionario();
    $funcionario->id=$id;
    $funcionario->nome=$nome;
    $funcionario->cpf=$cpf;
    $funcionario->setor=$setor;

    $funcionario->atualizar();

    header('Location: $funcionarios.php');
?>
