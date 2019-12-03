<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();

?>
<div id="header" class="row justify-content-center">
    <h1 class="titulo">Ficha do Funcionário</h1>
</div>
<div class="container" id="ficha">
    <div class="row justify-content-center">
        <ul class="list-group" id="lista">
            <?php
                if(isset($_GET['read'])):
                    $id = $_GET['read'];
                    $result = pg_query($c,"SELECT * FROM funcionarios WHERE id=$id");

                    if($result):
                        $row = pg_fetch_assoc($result);

            ?>
                        <li class="list-group-item">ID: <?php echo $row['id'];?></li>
                        <li class="list-group-item">NOME: <?php echo $row['nome'];?></li>
                        <li class="list-group-item">CPF: <?php echo $row['cpf'];?></li>
                        <li class="list-group-item">ENDEREÇO: <?php echo $row['endereco'];?></li>
                        <li class="list-group-item">SETOR: <?php echo $row['setor'];?></li>
                <?php endif;
              endif;?>
        </ul>
    </div>
    <div class="row justify-content-center">
        <a id="voltar" class="btn btn-info" role="button" href="funcionarios.php">Voltar</a>
    </div>
</div>
<?php include_once 'footer.php'; ?>
