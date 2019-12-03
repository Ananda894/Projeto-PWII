<?php
    include_once 'funcionario.class.php';

    $funcionario = new Funcionario();
    $funcionario->id=$_POST["id"];
    $funcionario->nome=$_POST["nome"];
    $funcionario->cpf=$_POST["cpf"];
    $funcionario->endereco=$_POST["endereco"];
    $funcionario->setor=$_POST["setor"];

    $funcionario->salvar();

    header('Location: funcionarios.php');
?>
