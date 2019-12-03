<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATUALIZAR CLIENTE</title>
    </head>
    <body>

<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['update'])):
        $id = $_GET['update'];
        $result = pg_query($c,"SELECT * FROM clientes where id=$id");
        if($result):
            $row = pg_fetch_assoc($result);
    ?>
        <div id="header" class="row justify-content-center">
            <h1 class="titulo">Atualizar Cliente</h1>
        </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="clientes_update.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" value="<?php echo $row['id'];?>" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>NOME: </label>
                        <input class="form-control" value="<?php echo $row['nome'];?>" type="text" name="nome">
                    </div>
                    <div class="form-group">
                        <label>CPF: </label>
                        <input class="form-control" value="<?php echo $row['cpf'];?>" type="text" name="cpf">
                    </div>
                    <div class="form-group">
                        <label>ENDEREÇO: </label>
                        <input class="form-control" value="<?php echo $row['endereco'];?>" type="text" name="endereco">
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="Atualizar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="clientes.php">Voltar</a>
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
