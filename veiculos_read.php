<?php 
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();
    
?>
<div id="header" class="row justify-content-center">
    <h1 class="titulo">Ficha do Veículo</h1>
</div>
<div class="container" id="ficha">
    <div class="row justify-content-center">
        <ul class="list-group" id="lista">
            <?php 
                if(isset($_GET['read'])):
                    $id = $_GET['read'];
                    $veiculo = pg_query($c,"SELECT * FROM veiculos WHERE id=$id");
                    $veiculo_caracteristica = pg_query($c,"SELECT * FROM veiculos_caracteristicas WHERE veiculo_id=$id");
                    $veiculo_cliente = pg_query($c,"SELECT vendido_em FROM veiculos_clientes WHERE veiculo_id=$id");
                    $cliente = pg_query($c,"SELECT nome FROM clientes WHERE id = (SELECT cliente_id FROM veiculos_clientes WHERE veiculo_id=$id)");
                    $funcionario = pg_query($c,"SELECT nome FROM funcionarios WHERE id = (SELECT funcionario_id FROM veiculos_clientes WHERE veiculo_id=$id)");

                    if($veiculo):
                        $row = pg_fetch_assoc($veiculo);
                    
            ?>
                        <li class="list-group-item">ID: <?php echo $row['id'];?></li>
                        <li class="list-group-item">FABRICANTE: <?php echo $row['fabricante'];?></li>
                        <li class="list-group-item">COR: <?php echo $row['cor'];?></li>
                        <li class="list-group-item">ANO: <?php echo $row['ano'];?></li>
                        <li class="list-group-item">PORTAS: <?php echo $row['portas'];?></li>
                        <li class="list-group-item">MODELO: <?php echo $row['modelo'];?></li>
                        <li class="list-group-item">SITUAÇÃO: <?php echo $row['situacao'];?></li>
                        <li class="list-group-item">NOVO: 
                            <?php 
                                $t = 't';
                                if($row['novo']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">PLACA: <?php echo $row['placa'];?></li>
                        <li class="list-group-item">PREÇO: R$ <?php echo $row['preco'];?></li>
                    <?php endif;?>
                <?php 
                    if($veiculo_caracteristica):
                        $row = pg_fetch_assoc($veiculo_caracteristica);
                        
                ?>
                        <li class="list-group-item">DESCRIÇÃO: <?php echo $row['descricao'];?></li>
                    <?php endif;?>
                <?php
                    if($veiculo_cliente):
                        if($funcionario):
                            if($cliente):    
                                $rowVC = pg_fetch_assoc($veiculo_cliente);
                                $rowC = pg_fetch_assoc($cliente);
                                $rowF = pg_fetch_assoc($funcionario);
                ?>
                                <li class="list-group-item">COMPRADOR: <?php echo $rowC['nome'];?></li>
                                <li class="list-group-item">VENDEDOR: <?php echo $rowF['nome'];?></li>
                                <li class="list-group-item">DATA DA VENDA: <?php echo $rowVC['vendido_em'];?></li>
                            <?php endif;?>
                        <?php endif;?>            
                    <?php endif;?>            
                <?php endif;?>        
        </ul>
    </div>   
    <div class="row justify-content-center">
        <a id="voltar" class="btn btn-info" role="button" href="veiculos.php">Voltar</a>       
    </div>                      
</div>    
<?php include_once 'footer.php'; ?>
