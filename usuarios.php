<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();
    $result = pg_query($c,"SELECT * FROM usuarios ORDER BY id");
?>
<head>
    <title>Usuários</title>
</head>
<div id="header" class="row justify-content-center">
        <h1 class="titulo">Usuários</h1>
</div>
<div class="container">
<a href="usuarios_create_form.php" id="cadastrar" class="btn btn-info" role="button">Cadastrar Novo Usuário</a>
<a id="voltar" class="btn btn-info" role="button" href="index.php">Voltar</a>
    <div class="row justify-content-center">
        <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID DO FUNCIONÁRIO</th>
                        <th>USERNAME</th>
                        <th>SENHA</th>
                    </tr>
                </thead>
        <?php
            if($result)
                while ($row = pg_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['funcionario_id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['senha'];?></td>
                        <td>
                            <a class="icone" href="usuarios_read.php?read=<?php echo $row['id']?>"><img src="img\consultar.png"></a>
                            <a class="icone" href="usuarios_update_form.php?update=<?php echo $row['id'];?>"><img src="img\editar.png"></a>
                            <a class="icone" href="usuarios_delete.php?delete=<?php echo $row['id']?>"><img src="img\excluir.png"></a>
                        </td>
                    </tr>
        <?php  endwhile;
        pg_close($c);?>
        </table>
    </div>
</div>
<?php
    include_once 'footer.php';
?>
