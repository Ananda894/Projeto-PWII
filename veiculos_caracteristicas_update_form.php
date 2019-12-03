<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATUALIZAR VEÍCULO-CARACTERÍSTICA</title>
    </head>
    <body>

<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['update'])):
        $id = $_GET['update'];
        $result = pg_query($c,"SELECT * FROM veiculos_caracteristicas where id=$id");
        if($result):
            $row = pg_fetch_assoc($result);
    ?>
        <div id="header" class="row justify-content-center">
            <h1 class="titulo">Atualizar Veículo-Característica</h1>
        </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_caracteristicas_update.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" value="<?php echo $row['id'];?>" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>ID DO VEÍCULO: </label>
                        <input class="form-control" value="<?php echo $row['veiculo_id'];?>" type="text" name="veiculo_id">
                    </div>
                    <div class="form-group">
                        <label>DESCRIÇÃO: </label>
                        <input class="form-control" value="<?php echo $row['descricao'];?>" type="text" name="descricao">
                    </div>
                    <div class="form-group">
                        <label>GASOLINA: </label>
                        <input type="radio" name="gasolina" value="TRUE"
                            <?php if($row['gasolina']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="gasolina" value="FALSE"
                            <?php if($row['gasolina']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="form-group">
                        <label>ÁLCOOL: </label>
                        <input type="radio" name="alcool" value="TRUE"
                            <?php if($row['alcool']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="alcool" value="FALSE"
                            <?php if($row['alcool']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="form-group">
                        <label>DIESEL: </label>
                        <input type="radio" name="diesel" value="TRUE"
                            <?php if($row['diesel']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="diesel" value="FALSE"
                            <?php if($row['diesel']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="form-group">
                        <label>FLEX: </label>
                        <input type="radio" name="flex" value="TRUE"
                            <?php if($row['flex']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="flex" value="FALSE"
                            <?php if($row['flex']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="form-group">
                        <label>AR-CONDICIONADO: </label>
                        <input type="radio" name="ar_condicionado" value="TRUE"
                            <?php if($row['ar_condicionado']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="ar_condicionado" value="FALSE"
                            <?php if($row['ar_condicionado']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="form-group">
                        <label>AIRBAG: </label>
                        <input type="radio" name="airbag" value="TRUE"
                            <?php if($row['airbag']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="airbag" value="FALSE"
                            <?php if($row['airbag']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="form-group">
                        <label>BLINDAGEM: </label>
                        <input type="radio" name="blindagem" value="TRUE"
                            <?php if($row['blindagem']=='t')
                                echo 'checked';
                            ?>
                        > Sim
                        <input type="radio" name="blindagem" value="FALSE"
                            <?php if($row['blindagem']=='f')
                                echo 'checked';
                            ?>
                        > Não
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="Atualizar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="veiculos_caracteristicas.php">Voltar</a>
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
