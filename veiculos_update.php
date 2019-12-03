<?php
    include_once 'veiculo.class.php';
    include_once 'Db.class.php';

    $c = new Conexao();
    $c->conectar();

    $id=$_POST["id"];
    $fabricante=$_POST["fabricante"];
    $cor=$_POST["cor"];
    $ano=$_POST["ano"];
    $portas=$_POST["portas"];
    $modelo=$_POST["modelo"];
    $situacao=$_POST["situacao"];
    $novo=$_POST["novo"];
    $preco=$_POST["preco"];
    $placa=$_POST["placa"];

    $veiculo = new Veiculo();
    $veiculo->id=$id;
    $veiculo->fabricante=$fabricante;
    $veiculo->cor=$cor;
    $veiculo->ano=$ano;
    $veiculo->portas=$portas;
    $veiculo->modelo=$modelo;
    $veiculo->situacao=$situacao;
    $veiculo->novo=$novo;
    $veiculo->preco=$preco;
    $veiculo->placa=$placa;
    
    $veiculo->atualizar();

    header('Location: veiculos.php');
?> 