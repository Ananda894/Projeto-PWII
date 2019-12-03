<?php
    include_once 'Db.class.php';
    include_once 'veiculo_caracteristica.class.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $veiculo_caracteristica = new Veiculo_caracteristica();
        $veiculo_caracteristica->id=$id;
        $veiculo_caracteristica->excluir();
    }
    header('Location: veiculos_caracteristicas.php');
?>
