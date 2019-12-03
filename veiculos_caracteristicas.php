<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();
    $result = pg_query($c,"SELECT * FROM veiculos_caracteristicas ORDER BY id");
?>
<head>
    <title>Veículos</title>
</head>
<div id="header" class="row justify-content-center">
        <h1 class="titulo">Veículos-Características</h1>
</div>
<div class="container">
<a href="veiculos_caracteristicas_create_form.php" id="cadastrar" class="btn btn-info" role="button">Cadastrar Novo Veículo-Característica</a>
<a id="voltar" class="btn btn-info" role="button" href="veiculos.php">Voltar</a>
    <div class="row justify-content-center">
        <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID DO VEÍCULO</th>
                        <th>DESCRIÇÃO</th>
                        <th>GASOLINA</th>
                        <th>ÁLCOOL</th>
                        <th>DIESEL</th>
                        <th>FLEX</th>
                        <th>AR-CONDICIONADO</th>
                        <th>AIRBAG</th>
                        <th>BLINDAGEM</th>
                    </tr>
                </thead>
        <?php
            if($result):
                while ($row = pg_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['veiculo_id'];?></td>
                        <td><?php echo $row['descricao'];?></td>
                        <td><?php echo $row['gasolina'];?></td>
                        <td><?php echo $row['alcool'];?></td>
                        <td><?php echo $row['diesel'];?></td>
                        <td><?php echo $row['flex'];?></td>
                        <td><?php echo $row['ar_condicionado'];?></td>
                        <td><?php echo $row['airbag'];?></td>
                        <td><?php echo $row['blindagem'];?></td>
                        <td>
                            <a class="icone" href="veiculos_caracteristicas_read.php?read=<?php echo $row['id']?>"><img src="img\consultar.png"></a>
                            <a class="icone" href="veiculos_caracteristicas_update_form.php?update=<?php echo $row['id'];?>"><img src="img\editar.png"></a>
                            <a class="icone" href="veiculos_caracteristicas_delete.php?delete=<?php echo $row['id']?>"><img src="img\excluir.png"></a>
                        </td>
                    </tr>
        <?php  endwhile;
          endif;
        ?>
        </table>
    </div>
</div>
<?php
    include_once 'footer.php';
?>
