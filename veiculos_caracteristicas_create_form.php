<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CADASTRAR VEÍCULO-CARACTERÍSTICA</title>
        <?php
        include_once 'estilo.php';
        ?>
    </head>
    <body>
    <div id="header" class="row justify-content-center">
        <h1 class="titulo">Cadastrar Veículo-Característica</h1>
    </div>
        <div class="container" id="formulario">
            <div class="row justify-content-center">
                <form method="POST" action="veiculos_caracteristicas_create.php">
                    <div class="form-group">
                        <label>ID: </label>
                        <input class="form-control" type="text" name="id">
                    </div>
                    <div class="form-group">
                        <label>ID DO VEÍCULO: </label>
                        <input class="form-control" type="text" name="veiculo_id">
                    </div>
                    <div class="form-group">
                        <label>DESCRIÇÃO: </label>
                        <input class="form-control" type="text" name="descricao">
                    </div>
                    <div class="form-group">
                        <label>GASOLINA: </label>
                        <input type="radio" name="gasolina" value="TRUE">Sim
                        <input type="radio" name="gasolina" value="FALSE">Não
                    </div>
                    <div class="form-group">
                        <label>ÁLCOOL: </label>
                        <input type="radio" name="alcool" value="TRUE">Sim
                        <input type="radio" name="alcool" value="FALSE">Não
                    </div>
                    <div class="form-group">
                        <label>DIESEL: </label>
                        <input type="radio" name="diesel" value="TRUE">Sim
                        <input type="radio" name="diesel" value="FALSE">Não
                    </div>
                    <div class="form-group">
                        <label>FLEX: </label>
                        <input type="radio" name="flex" value="TRUE">Sim
                        <input type="radio" name="flex" value="FALSE">Não
                    </div>
                    <div class="form-group">
                        <label>AR-CONDICIONADO: </label>
                        <input type="radio" name="ar_condicionado" value="TRUE">Sim
                        <input type="radio" name="ar_condicionado" value="FALSE">Não
                    </div>
                    <div class="form-group">
                        <label>AIRBAG: </label>
                        <input type="radio" name="airbag" value="TRUE">Sim
                        <input type="radio" name="airbag" value="FALSE">Não
                    </div>
                    <div class="form-group">
                        <label>BLINDAGEM: </label>
                        <input type="radio" name="blindagem" value="TRUE">Sim
                        <input type="radio" name="blindagem" value="FALSE">Não
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-info" type="submit" value="Cadastrar" id="form-button">
                        <a id="form-button" class="btn btn-info" role="button" href="veiculos_caracteristicas.php">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
