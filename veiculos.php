<?php 
    include_once 'Db.class.php';
    include_once 'estilo.php';
    
    $con = new Conexao();
    $c = $con->conectar();
    $result = pg_query($c,"SELECT * FROM veiculos ORDER BY id");
?>   
<head>
    <title>Veículos</title>
</head>    
<div id="header" class="row justify-content-center">
        <h1 class="titulo">Veículos</h1>
</div> 
<div class="container">  
<a href="veiculos_create_form.php" id="cadastrar" class="btn btn-info" role="button">Cadastrar Novo Veículo</a>
<a id="voltar" class="btn btn-info" role="button" href="index.php">Voltar</a> 
<a id="vCar" class="btn btn-info" role="button" href="veiculos_caracteristicas.php">Veículos-Caracteristicas</a> 
<a id="vCli" class="btn btn-info" role="button" href="veiculos_clientes.php">Veículos-Clientes</a>       
    <div class="row justify-content-center">
        <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FABRICANTE</th>
                        <th>COR</th>
                        <th>ANO</th>
                        <th>PORTAS</th>
                        <th>MODELO</th>
                        <th>SITUAÇÃO</th>
                        <th>NOVO</th>
                        <th>PLACA</th>
                        <th>PREÇO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
        <?php 
            if($result):
                while ($row = pg_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fabricante'];?></td>
                        <td><?php echo $row['cor'];?></td>
                        <td><?php echo $row['ano'];?></td>
                        <td><?php echo $row['portas'];?></td>
                        <td><?php echo $row['modelo'];?></td>
                        <td><?php echo $row['situacao'];?></td>
                        <td><?php echo $row['novo'];?></td>
                        <td><?php echo $row['placa'];?></td>
                        <td><?php echo $row['preco'];?></td>
                        <td>
                            <a class="icone" href="veiculos_read.php?read=<?php echo $row['id']?>"><img src="img\consultar.png"></a>
                            <a class="icone" href="veiculos_update_form.php?update=<?php echo $row['id'];?>"><img src="img\editar.png"></a>
                            <a class="icone" href="veiculos_delete.php?delete=<?php echo $row['id']?>"><img src="img\excluir.png"></a>
                        </td>
                    </tr>                   
        <?php  endwhile;
            endif;?>        
        </table>
    </div>
</div>
<?php 
    include_once 'footer.php';
?>        