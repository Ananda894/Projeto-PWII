<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

?>
<div id="header" class="row justify-content-center">
    <h1 class="titulo">Ficha do Usuário</h1>
</div>
<div class="container" id="ficha">
    <div class="row justify-content-center">
        <ul class="list-group" id="lista">
            <?php
                if(isset($_GET['read'])):
                    $id = $_GET['read'];
                    $result = pg_query($c,"SELECT * FROM usuarios WHERE id=$id");

                    if($result):
                        $row = pg_fetch_assoc($result);

            ?>
                        <li class="list-group-item">ID: <?php echo $row['id'];?></li>
                        <li class="list-group-item">ID DO FUNCIONAŔIO: <?php echo $row['funcionario_id'];?></li>
                        <li class="list-group-item">USERNAME: <?php echo $row['username'];?></li>
                        <li class="list-group-item">SENHA: <?php echo $row['senha'];?></li>
                <?php endif;
              endif;?>
        </ul>
    </div>
    <div class="row justify-content-center">
        <a id="voltar" class="btn btn-info" role="button" href="usuarios.php">Voltar</a>
    </div>
</div>
<?php include_once 'footer.php'; ?>
