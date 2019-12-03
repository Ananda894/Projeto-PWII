<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATUALIZAR VEÍCULO</title>
    </head>
    <body>

<?php 
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['update'])):
        $id = $_GET['update'];
        $result = pg_query($c,"SELECT * FROM veiculos where id=$id");
        if($result):
            $row = pg_fetch_assoc($result);
    ?>
        <div id="header" class="row justify-content-center">
            <h1 class="titulo">Atualizar Veículo</h1>
        </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_update.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" value="<?php echo $row['id'];?>" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>FABRICANTE: </label>
                        <input class="form-control" value="<?php echo $row['fabricante'];?>" type="text" name="fabricante">
                    </div>
                    <div class="form-group">    
                        <label>COR: </label>
                        <input class="form-control" value="<?php echo $row['cor'];?>" type="text" name="cor">
                    </div>
                    <div class="form-group">    
                        <label>ANO: </label>
                        <input class="form-control" value="<?php echo $row['ano'];?>" type="text" name="ano">
                    </div>
                    <div class="form-group">    
                        <label>PORTAS: </label>
                        <input class="form-control" value="<?php echo $row['portas'];?>" type="text" name="portas">
                    </div>
                    <div class="form-group">    
                        <label>MODELO: </label>
                        <input class="form-control" value="<?php echo $row['modelo'];?>" type="text" name="modelo">
                    </div>
                    <div class="form-group">    
                        <label>SITUAÇÃO: </label>
                        <input type="radio" name="situacao" value="vendido" 
                            <?php if($row['situacao']=='vendido') 
                                echo 'checked';
                            ?>
                            >  Vendido
                        <input type="radio" name="situacao" value="a venda"
                            <?php if($row['situacao']=='a venda') 
                                echo 'checked';
                            ?>
                        >  À venda
                    </div> 
                    <div class="form-group">   
                        <label>NOVO: </label>
                        <input type="radio" name="novo" value="TRUE"
                            <?php if($row['novo']=='t') 
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="novo" value="FALSE"
                            <?php if($row['novo']=='f') 
                                echo 'checked';
                            ?>
                        > Não

                    </div>
                    <div class="form-group">    
                        <label>PREÇO: </label>
                        <input class="form-control" value="<?php echo $row['preco'];?>" type="text" name="preco">
                    </div>
                    <div class="form-group">    
                        <label>PLACA: </label>
                        <input class="form-control" value="<?php echo $row['placa'];?>" type="text" name="placa">
                    </div>
                    <div class="row justify-content-center">    
                        <input class="btn btn-info" type="submit" value="Atualizar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="veiculos.php">Voltar</a>
                    </div> 
                </form>
            </div>
        </div>
        <?php 
        endif;
    endif;
    include_once 'footer.php';
        ?>       
    </body>
</html>