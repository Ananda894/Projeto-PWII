<?php
    include_once 'usuario.class.php';
    include_once 'Db.class.php';

    $c = new Conexao();
    $c->conectar();

    $id=$_POST["id"];
    $funcionario_id=$_POST["funcionario_id"];
    $username=$_POST["username"];
    $senha=$_POST["senha"];

    $usuario = new Usuario();
    $usuario->id=$id;
    $usuario->funcionario_id=$funcionario_id;
    $usuario->username=$username;
    $usuario->senha=$senha;

    $usuario->atualizar();

    header('Location: usuarios.php');
?>
