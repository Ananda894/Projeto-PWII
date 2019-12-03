<?php
    include_once 'Db.class.php';
    include_once 'veiculo_cliente.class.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $veiculo_cliente = new Veiculo_cliente();
        $veiculo_cliente->id=$id;
        $veiculo_cliente->excluir();
    }
    header('Location: veiculos_clientes.php');
?>
