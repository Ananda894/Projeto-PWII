<?php
    include_once 'cliente.class.php';

    $cliente = new Cliente();
    $cliente->id=$_POST["id"];
    $cliente->nome=$_POST["nome"];
    $cliente->cpf=$_POST["cpf"];
    $cliente->endereco=$_POST["endereco"];

    $cliente->salvar();

    header('Location: clientes.php');
?>
