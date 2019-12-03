<?php
    include_once 'Db.class.php';
    include_once 'cliente.class.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $cliente = new Cliente();
        $cliente->id=$id;
        $cliente->excluir();
    }
    header('Location: clientes.php');
?>
