<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CADASTRAR VEÍCULO-CLIENTE</title>
        <?php
        include_once 'estilo.php';
        ?>
    </head>
    <body>
    <div id="header" class="row justify-content-center">
        <h1 class="titulo">Cadastrar Veículo-Cliente</h1>
    </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_clientes_create.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>ID DO VEÍCULO: </label>
                        <input class="form-control" type="text" name="veiculo_id">
                    </div>
                    <div class="form-group">
                        <label>ID DO CLIENTE: </label>
                        <input class="form-control" type="text" name="cliente_id">
                    </div>
                    <div class="form-group">
                        <label>ID DO FUNCIONAŔIO: </label>
                        <input class="form-control" type="text" name="funcionario_id">
                    </div>
                    <div class="form-group">
                        <label>DATA DA VENDA: </label>
                        <input class="form-control" type="text" name="vendido_em">
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="cadastrar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="veiculos_clientes.php">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
