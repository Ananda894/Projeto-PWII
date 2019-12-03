<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CADASTRAR USUÁRO</title>
        <?php
        include_once 'estilo.php';
        ?>
    </head>
    <body>
    <div id="header" class="row justify-content-center">
        <h1 class="titulo">Cadastrar Usuário</h1>
    </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="usuarios_create.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>ID DO FUNCIONÁRIO: </label>
                        <input class="form-control" type="text" name="funcionario_id">
                    </div>
                    <div class="form-group">
                        <label>USERNAME: </label>
                        <input class="form-control" type="text" name="username">
                    </div>
                    <div class="form-group">
                        <label>SENHA(mínimo 8 caracteres): </label>
                        <input class="form-control" type="password" name="senha"  minlength="8" required>
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="cadastrar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="usuarios.php">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
