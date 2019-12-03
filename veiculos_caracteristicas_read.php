<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

?>
<div id="header" class="row justify-content-center">
    <h1 class="titulo">Ficha do Veículo-Característica</h1>
</div>
<div class="container" id="ficha">
    <div class="row justify-content-center">
        <ul class="list-group" id="lista">
            <?php
                if(isset($_GET['read'])):
                    $id = $_GET['read'];
                    $result = pg_query($c,"SELECT * FROM veiculos_caracteristicas WHERE id=$id");

                    if($result):
                        $row = pg_fetch_assoc($result);

            ?>
                        <li class="list-group-item">ID: <?php echo $row['id'];?></li>
                        <li class="list-group-item">ID DO VEÍCULO: <?php echo $row['veiculo_id'];?></li>
                        <li class="list-group-item">DESCRIÇÃO: <?php echo $row['descricao'];?></li>
                        <li class="list-group-item">GASOLINA:
                            <?php
                                $t = 't';
                                if($row['gasolina']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">ÁLCOOL:
                            <?php
                                $t = 't';
                                if($row['alcool']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">DIESEL:
                            <?php
                                $t = 't';
                                if($row['diesel']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">FLEX:
                            <?php
                                $t = 't';
                                if($row['flex']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">AR-CONDICIONADO:
                            <?php
                                $t = 't';
                                if($row['ar_condicionado']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">AIRBAG:
                            <?php
                                $t = 't';
                                if($row['airbag']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                        <li class="list-group-item">BLINDAGEM:
                            <?php
                                $t = 't';
                                if($row['blindagem']==$t){
                                    echo 'Sim';
                                }
                                else{
                                    echo 'Não';
                                }
                            ?>
                        </li>
                    <?php endif;?>
                <?php endif;?>
        </ul>
    </div>
    <div class="row justify-content-center">
        <a id="voltar" class="btn btn-info" role="button" href="veiculos_caracteristicas.php">Voltar</a>
    </div>
</div>
<?php include_once 'footer.php'; ?>
