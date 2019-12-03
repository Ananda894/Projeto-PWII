<?php
    include_once 'usuario.class.php';

    $usuario = new Usuario();
    $usuario->id=$_POST["id"];
    $usuario->funcionario_id=$_POST["funcionario_id"];
    $usuario->username=$_POST["username"];
    $usuario->senha=$_POST["senha"];

    $usuario->salvar();

    header('Location: usuarios.php');
?>
