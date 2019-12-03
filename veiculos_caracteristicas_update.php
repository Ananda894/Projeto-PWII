<?php
    include_once 'veiculo_caracteristica.class.php';
    include_once 'Db.class.php';

    $c = new Conexao();
    $c->conectar();

    $id=$_POST["id"];
    $veiculo_id=$_POST["veiculo_id"];
    $descricao=$_POST["descricao"];
    $gasolina=$_POST["gasolina"];
    $alcool=$_POST["alcool"];
    $diesel=$_POST["diesel"];
    $flex=$_POST["flex"];
    $ar_condicionado=$_POST["ar_condicionado"];
    $airbag=$_POST["airbag"];
    $blindagem=$_POST["blindagem"];

    $veiculo_caracteristica = new Veiculo_caracteristica();
    $veiculo_caracteristica->id=$id;
    $veiculo_caracteristica->veiculo_id=$veiculo_id;
    $veiculo_caracteristica->descricao=$descricao;
    $veiculo_caracteristica->gasolina=$gasolina;
    $veiculo_caracteristica->alcool=$alcool;
    $veiculo_caracteristica->diesel=$diesel;
    $veiculo_caracteristica->flex=$flex;
    $veiculo_caracteristica->ar_condicionado=$ar_condicionado;
    $veiculo_caracteristica->airbag=$airbag;
    $veiculo_caracteristica->blindagem=$blindagem;

    $veiculo_caracteristica->atualizar();

    header('Location: veiculos_caracteristicas.php');
?>
