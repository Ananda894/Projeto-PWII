<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATUALIZAR VEÍCULO-CLIENTE</title>
    </head>
    <body>

<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['update'])):
        $id = $_GET['update'];
        $result = pg_query($c,"SELECT * FROM veiculos_clientes where id=$id");
        if($result):
            $row = pg_fetch_assoc($result);
    ?>
        <div id="header" class="row justify-content-center">
            <h1 class="titulo">Atualizar Veículo-Cliente</h1>
        </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_clientes_update.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" value="<?php echo $row['id'];?>" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>ID DO VEÍCULO: </label>
                        <input class="form-control" value="<?php echo $row['veiculo_id'];?>" type="text" name="veiculo_id">
                    </div>
                    <div class="form-group">
                        <label>ID DO CLIENTE: </label>
                        <input class="form-control" value="<?php echo $row['cliente_id'];?>" type="text" name="cliente_id">
                    </div>
                    <div class="form-group">
                        <label>ID DO FUNCIONAŔIO: </label>
                        <input class="form-control" value="<?php echo $row['funcionario_id'];?>" type="text" name="funcionario_id">
                    </div>
                    <div class="form-group">
                        <label>DATA DA VENDA: </label>
                        <input class="form-control" value="<?php echo $row['vendido_em'];?>" type="text" name="vendido_em">
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="Atualizar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="veiculos_clientes.php">Voltar</a>
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
