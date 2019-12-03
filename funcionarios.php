<?php
    include_once 'Db.class.php';
    include_once 'estilo.php';

    $con = new Conexao();
    $c = $con->conectar();
    $result = pg_query($c,"SELECT * FROM funcionarios ORDER BY id");
?>
<head>
    <title>Funcionários</title>
</head>
<div id="header" class="row justify-content-center">
        <h1 class="titulo">Funcionários</h1>
</div>
<div class="container">
<a href="funcionarios_create_form.php" id="cadastrar" class="btn btn-info" role="button">Cadastrar Novo Funcionário</a>
<a id="voltar" class="btn btn-info" role="button" href="index.php">Voltar</a>
    <div class="row justify-content-center">
        <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>ENDEREÇO</th>
                        <th>SETOR</th>
                    </tr>
                </thead>
        <?php
            if($result)
                while ($row = pg_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
                        <td><?php echo $row['endereco'];?></td>
                        <td><?php echo $row['setor'];?></td>
                        <td>
                            <a class="icone" href="funcionarios_read.php?read=<?php echo $row['id']?>"><img src="img\consultar.png"></a>
                            <a class="icone" href="funcionarios_update_form.php?update=<?php echo $row['id'];?>"><img src="img\editar.png"></a>
                            <a class="icone" href="funcionarios_delete.php?delete=<?php echo $row['id']?>"><img src="img\excluir.png"></a>
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
