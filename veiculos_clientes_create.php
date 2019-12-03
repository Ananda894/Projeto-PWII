<?php
    include_once 'veiculo_cliente.class.php';

    $veiculo_cliente = new Veiculo_cliente();
    $veiculo_cliente->id=$_POST["id"];
    $veiculo_cliente->veiculo_id=$_POST["veiculo_id"];
    $veiculo_cliente->cliente_id=$_POST["cliente_id"];
    $veiculo_cliente->funcionario_id=$_POST["funcionario_id"];
    $veiculo_cliente->vendido_em=$_POST["vendido_em"];

    $veiculo_cliente->salvar();

    header('Location: veiculos_clientes.php');
?>
