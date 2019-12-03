<?php
    include_once 'cliente.class.php';
    include_once 'Db.class.php';

    $c = new Conexao();
    $c->conectar();

    $id=$_POST["id"];
    $nome=$_POST["nome"];
    $cpf=$_POST["cpf"];
    $endereco=$_POST["endereco"];

    $cliente = new Cliente();
    $cliente->id=$id;
    $cliente->nome=$nome;
    $cliente->cpf=$cpf;
    $cliente->endereco=$endereco;

    $cliente->atualizar();

    header('Location: clientes.php');
?>
