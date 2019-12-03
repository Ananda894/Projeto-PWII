<?php
    include_once 'veiculo_cliente.class.php';
    include_once 'Db.class.php';

    $c = new Conexao();
    $c->conectar();

    $id=$_POST["id"];
    $veiculo_id=$_POST["veiculo_id"];
    $cliente_id=$_POST["cliente_id"];
    $funcionario_id=$_POST["funcionario_id"];
    $vendido_em=$_POST["vendido_em"];

    $veiculo_cliente = new Veiculo_cliente();
    $veiculo_cliente->id=$id;
    $veiculo_cliente->veiculo_id=$veiculo_id;
    $veiculo_cliente->cliente_id=$cliente_id;
    $veiculo_cliente->funcionario_id=$funcionario_id;
    $veiculo_cliente->vendido_em=$vendido_em;

    $veiculo_cliente->atualizar();

    header('Location: veiculos_clientes.php');
?>
