<?php
    include_once 'Db.class.php';
    include_once 'usuario.class.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $usuario = new Usuario();
        $usuario->id=$id;
        $usuario->excluir();
    }
    header('Location: usuarios.php');
?>
