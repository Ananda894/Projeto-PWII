<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();
    $result = pg_query($c,"SELECT * FROM veiculos_clientes ORDER BY id");
?>
<head>
    <title>Veículos-Clientes</title>
</head>
<div id="header" class="row justify-content-center">
        <h1 class="titulo">Veículos-Clientes</h1>
</div>
<div class="container">
<a href="veiculos_clientes_create_form.php" id="cadastrar" class="btn btn-info" role="button">Cadastrar Novo Veículo-Cliente</a>
<a id="voltar" class="btn btn-info" role="button" href="veiculos.php">Voltar</a>
    <div class="row justify-content-center">
        <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID DO VEÍCULO</th>
                        <th>ID DO CLIENTE</th>
                        <th>ID DO FUNCIONÁRIO</th>
                        <th>DATA DA VENDA</th>
                    </tr>
                </thead>
        <?php
            if($result):
                while ($row = pg_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['veiculo_id'];?></td>
                        <td><?php echo $row['cliente_id'];?></td>
                        <td><?php echo $row['funcionario_id'];?></td>
                        <td><?php echo $row['vendido_em'];?></td>
                        <td>
                            <a class="icone" href="veiculos_clientes_read.php?read=<?php echo $row['id']?>"><img src="img\consultar.png"></a>
                            <a class="icone" href="veiculos_clientes_update_form.php?update=<?php echo $row['id'];?>"><img src="img\editar.png"></a>
                            <a class="icone" href="veiculos_clientes_delete.php?delete=<?php echo $row['id']?>"><img src="img\excluir.png"></a>
                        </td>
                    </tr>
<?php           endwhile;
        endif;
    ?>
        </table>
    </div>
</div>
<?php
    include_once 'footer.php';
?>
