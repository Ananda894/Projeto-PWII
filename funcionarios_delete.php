<?php
    include_once 'Db.class.php';
    include_once 'funcionario.class.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $funcionario = new Funcionario();
        $funcionario->id=$id;
        $funcionario->excluir();
    }
    header('Location: funcionarios.php');
?>
