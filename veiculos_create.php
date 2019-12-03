<?php
    include_once 'veiculo.class.php';

    $veiculo = new Veiculo();
    $veiculo->id=$_POST["id"];
    $veiculo->fabricante=$_POST["fabricante"];
    $veiculo->cor=$_POST["cor"];
    $veiculo->ano=$_POST["ano"];
    $veiculo->portas=$_POST["portas"];
    $veiculo->modelo=$_POST["modelo"];
    $veiculo->situacao=$_POST["situacao"];
    $veiculo->novo=$_POST["novo"];
    $veiculo->preco=$_POST["preco"];
    $veiculo->placa=$_POST["placa"];

    $veiculo->salvar();

    header('Location: veiculos.php');
?>