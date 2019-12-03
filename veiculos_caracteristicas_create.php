<?php
    include_once 'veiculo_caracteristica.class.php';

    $veiculo_caracteristica = new Veiculo_caracteristica();
    $veiculo_caracteristica->id=$_POST["id"];
    $veiculo_caracteristica->veiculo_id=$_POST["veiculo_id"];
    $veiculo_caracteristica->descricao=$_POST["descricao"];
    $veiculo_caracteristica->gasolina=$_POST["gasolina"];
    $veiculo_caracteristica->alcool=$_POST["alcool"];
    $veiculo_caracteristica->diesel=$_POST["diesel"];
    $veiculo_caracteristica->flex=$_POST["flex"];
    $veiculo_caracteristica->ar_condicionado=$_POST["ar_condicionado"];
    $veiculo_caracteristica->airbag=$_POST["airbag"];
    $veiculo_caracteristica->blindagem=$_POST["blindagem"];

    $veiculo_caracteristica->salvar();

    header('Location: veiculos_caracteristicas.php');
?>
