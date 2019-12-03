<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CADASTRAR CLIENTE</title>
        <?php
        include_once 'estilo.php';
        ?>
    </head>
    <body>
    <div id="header" class="row justify-content-center">
        <h1 class="titulo">Cadastrar Cliente</h1>
    </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_create.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>NOME: </label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="form-group">
                        <label>CPF: </label>
                        <input class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" type="text" name="cpf">
                    </div>
                    <div class="form-group">
                        <label>ENDEREÇO: </label>
                        <input class="form-control" type="text" name="endereço">
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="cadastrar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="clientes.php">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
