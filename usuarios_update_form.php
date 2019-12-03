<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ATUALIZAR USUÁRIO</title>
    </head>
    <body>

<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

    if(isset($_GET['update'])):
        $id = $_GET['update'];
        $result = pg_query($c,"SELECT * FROM usuarios where id=$id");
        if($result):
            $row = pg_fetch_assoc($result);
    ?>
        <div id="header" class="row justify-content-center">
            <h1 class="titulo">Atualizar Usuário</h1>
        </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="usuarios_update.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" value="<?php echo $row['id'];?>" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>ID DO FUNCIONÁRIO: </label>
                        <input class="form-control" value="<?php echo $row['funcionario_id'];?>" type="text" name="funcionario_id">
                    </div>
                    <div class="form-group">
                        <label>USERNAME: </label>
                        <input class="form-control" value="<?php echo $row['username'];?>" type="text" name="username">
                    </div>
                    <div class="form-group">
                        <label>SENHA: </label>
                        <input class="form-control"  type="password" minlength="8" required value="<?php echo $row['senha'];?>" name="senha">
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="Atualizar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="usuarios.php">Voltar</a>
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
