<?php 
    include_once 'Db.class.php';
    include_once 'veiculo.class.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $veiculo = new Veiculo();
        $veiculo->id=$id;
        $veiculo->excluir();
    }
    header('Location: veiculos.php');
?>